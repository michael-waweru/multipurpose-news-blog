<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function category($slug)
    {
        $category= Category::where('slug', $slug)->first();

        $recent_posts = Blog::where('category_id', $category->id)
            ->orderBy('created_at', 'DESC')->take(1)->get();

        $blogs= Blog::where('category_id', '=', $category->id)->take(3)->get();

        return view('frontend.category',compact(['category','recent_posts','blogs']));
    }
}
