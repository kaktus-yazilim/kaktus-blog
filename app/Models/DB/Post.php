<?php

namespace App\Models\DB;

class Post extends BaseModel
{
    protected $table = 'posts';
    public $timestamps = true;

    public function author()
    {
        return $this->hasOne('\App\Models\DB\User', 'id', 'author_id');
    }
}