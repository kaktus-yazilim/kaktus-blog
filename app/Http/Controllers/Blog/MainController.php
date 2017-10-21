<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function index()
    {
        return view('blog.postList');
    }

    public function postDetails($id)
    {
        return view('blog.postDetails', ['id' => $id]);
    }
}
