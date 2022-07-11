<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogSubscribers;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function blogDetail($category, $slug)
    {
        $blogDetail = Blog::where('slug', $slug)->first();

        // get the related categories id of the posts
        $related_category_ids = $blogDetail->category()->pluck('categories.id');

        // get the related post of the categories $related_category_ids
        $relatedPosts = Blog::whereHas('category', function ($q) use($related_category_ids) {
               $q->whereIn('category_id', $related_category_ids); })
               ->where('id', '<>', $blogDetail->id)
               ->take(3)->get();

        $interestedPosts = Blog::inRandomOrder()->take(2)->get();

        $article = Blog::with('tagged')->first(); // eager load
        foreach($article->tags as $tag) {
            $tag->name . ' with url slug of ' . $tag->slug;
        }
        return view('frontend.blog-detail', compact(['blogDetail','relatedPosts','article','interestedPosts']));
    }

    public function author($slug)
    {
        $user = User::where('slug', $slug)->first();
        $author_archives = Blog::where('user_id', $user->id)->get();
        $author_name = Blog::where('user_id', $user->id)->first();
        $randomPosts = Blog::inRandomOrder()->take(3)->get();

        return view('frontend.author',compact(['author_name','author_archives','randomPosts']));
    }

    public function storeBlogSubscribers(Request $request)
    {
        $request->validate([

            'email' => 'required|email|unique:blog_subscribers',
        ]);

        BlogSubscribers::create([
            'email' => $request->email,
        ]);

        return response()->json(['success'=>'You have successfully subscribed to the newsletter!']);
    }
}
