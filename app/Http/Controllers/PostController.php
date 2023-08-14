<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function view()
    {
        return view('blog.view_blog');
    }
}
