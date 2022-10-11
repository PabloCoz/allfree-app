<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        $posts = Post::with('reactions', 'images', 'resources')
            ->orderBy('created_at', 'desc')->inRandomOrder()->get();
        $categories = Category::all();
        return view('dashboard', compact('posts', 'categories'));
    }
}
