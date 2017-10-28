<?php

namespace App\Models\Manager;

use App\Models\Map;
use App\Models\Query;

class Post extends Base
{
    const FIRST_POST_LIST_COUNT = 11;
    const SECOND_POST_LIST_COUNT = 18;
    const LAST_POST_LIST_COUNT = 2;
    const HEADER_POST_LIST_COUNT = 3;

    /**
     * @return array
     */
    public static function getAllForMainPage()
    {
        $posts = Query\Post::getAllPublished();
        $entityPosts = Map\Helper::mapList($posts);

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
        $dbPost = Query\Post::getByUrl($url);
        $entityPost = Map\Helper::mapSingle($dbPost);
        $mapPost = Map\Post::mapShapePostDetails($entityPost);

        return $mapPost;
    }

}