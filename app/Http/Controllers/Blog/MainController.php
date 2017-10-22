<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Manager\Post;

class MainController extends Controller
{
    public function index()
    {
        $posts = Post::getAllForMainPage();

        return view('blog.postList', [
            'posts' => $posts
        ]);
    }

    public function postDetails($url)
    {
        $post = Post::getDetailsByUrl($url);
        return view('blog.postDetails', ['post' => $post]);
    }
}
