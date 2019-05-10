<?php

namespace App\Http\Controllers;
use App\Post;


class PagesController extends Controller
{
    public function getIndex()
    {
        //Auto does Post::select('*')
        $posts = Post::orderBy('created_at', 'desc')->take(4)->get();
        return view('pages.welcome')->withPosts($posts);
    }

    public function getAbout()
    {
        $first = "Drew";
        $last = "Thomas";
        $fullname = $first . " " . $last;
        $email = 'dthomas@gmail.com';
        $data['email'] = $email;
        $data['fullname'] = $fullname;

        return view('pages.about')->withData($data);
    }

    public function getContact()
    {
        return view('pages.contact');
    }
}