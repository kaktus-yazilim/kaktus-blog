<?php

namespace App\Models\Query;

use App\Models\DB;
use App\Models\Entity;
use App\Models\Manager;

class Post
{
    const RELATION_AUTHOR = 'author';

    /**
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Support\Collection|static[]
     */
    public static function getAllPublished()
    {
        return DB\Post::with(self::RELATION_AUTHOR)
            ->where('status', Entity\Post::POST_STATUS_PUBLISHED)
            ->where('deleted', Entity\Post::UN_DELETED)
            ->where('private', Entity\Post::NO_PRIVATE)
            ->orderByDesc('published_date')
            ->take(Manager\Post::FIRST_POST_LIST_COUNT + Manager\Post::SECOND_POST_LIST_COUNT + Manager\Post::LAST_POST_LIST_COUNT)
            ->get();
    }

    /**
     * @param $url
     * @return DB\Post
     */
    public static function getByUrl($url)
    {
        return DB\Post::with(self::RELATION_AUTHOR)
            ->where('url', $url)
            ->where('private', Entity\Post::NO_PRIVATE)
            ->where('deleted', Entity\Post::UN_DELETED)
            ->first();
    }

    public static function getRandom($limit)
    {
        return DB\Post::where('private', Entity\Post::NO_PRIVATE)
            ->where('deleted', Entity\Post::UN_DELETED)
            ->inRandomOrder()
            ->take($limit)
            ->get();
    }
}