<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show(Category $category)
    {
        $posts =  Post::where('category_id', $category->id)->with('images')->get();
        return view('category.show', compact('category', 'posts'));
    }
}
