<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class BlogController extends Controller
{
    public function getSingle($slug) {
        //->get() will continue looking in database
        $post = Post::where('slug', '=', $slug)->first();

        return view('blog.single')->with("post", $post);
    }
}
