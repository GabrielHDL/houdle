<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;

use Illuminate\Http\Request;

class Landing extends Controller
{
    public function index()
    {
        $blog = [
            'url' => 'https://blog.houdle.com/',
            'post' => 'https://blog.houdle.com/posts/',
            'image' => 'https://blog.houdle.com/storage/',
            'category' => 'https://blog.houdle.com/category/',
        ];

        $posts = Post::where('status', 2)->latest('id')->take(6)->get();
        $categories = Category::all();

        return view('landing.index', compact('posts', 'categories', 'blog'));
    }
}
