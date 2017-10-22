<?php

namespace App\Models\Manager;

use App\Models\DB;
use App\Models\Entity;
use App\Models\Map;

class Post extends Base
{
    const FIRST_POST_LIST_COUNT = 11;
    const SECOND_POST_LIST_COUNT = 18;
    const LAST_POST_LIST_COUNT = 2;
    const HEADER_POST_LIST_COUNT = 3;

    /**
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Support\Collection|static[]
     */
    protected static function getAllPublished()
    {
        return DB\Post::with('author')
            ->where('status', Entity\Post::POST_STATUS_PUBLISHED)
            ->where('deleted', Entity\Post::UN_DELETED)
            ->where('private', Entity\Post::NO_PRIVATE)
            ->orderByDesc('published_date')
            ->take(self::FIRST_POST_LIST_COUNT + self::SECOND_POST_LIST_COUNT + self::LAST_POST_LIST_COUNT)
            ->get();
    }

    /**
     * @param $url
     * @return DB\Post
     */
    protected static function getByUrl($url)
    {
        return DB\Post::with('author')
            ->where('url', $url)
            ->where('private', Entity\Post::NO_PRIVATE)
            ->where('deleted', Entity\Post::UN_DELETED)
            ->first();
    }

    /**
     * @param $posts
     * @return array
     */
    public static function mapByList($posts)
    {
        $postList = [];
        foreach ($posts as $post) {
            $postList[] = self::mapSingle($post);
        }

        return $postList;
    }

    /**
     * @param DB\Post $post
     * @return Entity\Post
     */
    public static function mapSingle(DB\Post $post)
    {
        return Map\Post::map($post);
    }

    /**
     * @return array
     */
    public static function getAllForMainPage()
    {
        $posts = self::getAllPublished();
        $entityPosts = self::mapByList($posts);

        $postList = [];
        $value = 0;
        foreach ($entityPosts as $post) {
            $post = Map\Post::mapShapePostList($post);

            if ($value < self::HEADER_POST_LIST_COUNT) {
                $postList['headerPostList'][] = $post;
            }

            if ($value < self::FIRST_POST_LIST_COUNT) {
                $postList['firstPostList'][] = $post;
            } elseif
            (
                $value <
                self::FIRST_POST_LIST_COUNT + self::SECOND_POST_LIST_COUNT
            ) {
                $postList['secondPostList'][] = $post;
            } elseif
            (
                $value <
                self::FIRST_POST_LIST_COUNT + self::SECOND_POST_LIST_COUNT + self::LAST_POST_LIST_COUNT
            ) {
                $postList['lastPosts'][] = $post;
            }
            $value++;
        }

        return $postList;
    }

    public static function getDetailsByUrl($url)
    {
        $dbPost = self::getByUrl($url);
        $entityPost = self::mapSingle($dbPost);
        $mapPost = Map\Post::mapShapePostDetails($entityPost);

        return $mapPost;
    }

}