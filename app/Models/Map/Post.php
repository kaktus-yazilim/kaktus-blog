<?php

namespace App\Models\Map;

use App\Models\DB;
use App\Models\Entity;
use App\Models\Helper\Date;

class Post extends Base
{

    /**
     * @param DB\Post $post
     * @return Entity\Post
     */
    public static function map(DB\Post $post)
    {
        $entityPost = new Entity\Post();

        foreach (Entity\Post::COLUMNS as $column => $value) {
            if (isset($post->$column)) {
                $entityPost->$value($post->$column);
            }
        }

        return $entityPost;
    }

    /**
     * @param Entity\Post $post
     * @return array
     */
    public static function mapShapePostList(Entity\Post $post)
    {
        return [
            'title' => $post->getTitle(),
            'headerImageUrl' => $post->getHeaderImageUrl(),
            'description' => $post->getDescription(),
            'postLink' => self::getPostLink($post->getUrl()),
            'authorFullName' => $post->getAuthor()->getFullName(),
            'authorLink' => self::getUserLink($post->getAuthor()->getUserName()),
            'authorImage' => $post->getAuthor()->getPhoto(),
            'viewCount' => $post->getViewCount(),
            'new' => self::isToday($post->getPublishedDate())
        ];
    }

    /**
     * @param Entity\Post $post
     * @return array
     */
    public static function mapShapePostDetails(Entity\Post $post)
    {
        return [
            'id' => $post->getId(),
            'title' => $post->getTitle(),
            'content' => $post->getContent(),
            'viewCount' => $post->getViewCount(),
            'commentCount' => $post->getCommentCount(),
            'publishedDate' => Date::dateParseLocalized($post->getPublishedDate(), Date::ATOM),
            'publishedDateFull' => Date::dateParse($post->getPublishedDate(), Date::DATE_BASIC_FULL),
            'description' => $post->getDescription(),
            'postLink' => self::getPostLink($post->getUrl()),
            'headerImageUrl' => $post->getHeaderImageUrl(),
            'canonical' => $post->getCanonical(),
            'authorFullName' => $post->getAuthor()->getFullName(),
            'authorImageUrl' => $post->getAuthor()->getPhoto(),
            'authorLink' => self::getUserLink($post->getAuthor()->getUserName())
        ];
    }
}