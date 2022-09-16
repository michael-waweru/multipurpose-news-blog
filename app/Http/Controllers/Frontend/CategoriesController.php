<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Blog;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{
    public function category($slug)
    {
        $category= Category::where('slug', $slug)->first();
        $categories= Blog::inRandomOrder()
                    ->where('category_id', $category->id)->paginate(4);
        $recent_posts = Blog::where('category_id', $category->id)
            ->orderBy('created_at', 'DESC')->take(1)->get();

        $authorBoard = User::where('role_id', '=', [1,2])
            ->inRandomOrder()->first();

        $blogs= Blog::where('category_id', '=', $category->id)->take(2)->get();

        return view('frontend.category',compact(['category','categories','recent_posts','authorBoard','blogs']));
    }
}
