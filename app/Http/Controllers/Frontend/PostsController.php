<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Blog;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Models\BlogSubscribers;
use App\Http\Controllers\Controller;

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
        $comments = Comment::where('blog_id', $blogDetail->id)
                    ->where('approval', 1)
                    ->orderBy('created_at', 'DESC')->get();

        $article = Blog::with('tagged')->first(); // eager load
        foreach($article->tags as $tag) {
            $tag->name . ' with url slug of ' . $tag->slug;
        }

        $socialShare = \Share::currentPage()
        ->facebook()
        ->twitter()
        ->linkedin()
        ->whatsapp()
        ->telegram();        

        return view('frontend.blog-detail', compact([
            'blogDetail','relatedPosts','article','interestedPosts','comments','socialShare'
        ]));
    }

    public function author($slug)
    {
        $user = User::where('slug', $slug)->first();
        $author_archives = Blog::where('user_id', $user->id)->get();
        $author_name = Blog::where('user_id', $user->id)->first();
        $randomPosts = Blog::where('status', 'published')
                    ->inRandomOrder()->take(3)->get();

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

    public function storeBlogComment(Request $request, $slug)
    {
        $request->validate([
            'name'    => 'required',
            'email'   => 'required|email|unique:comments',
            'comment' => 'required'
        ]);

        $blog = Blog::where('slug', $slug)->first();

        Comment::create([
            'name' => $request->name,
            'blog_id' => $blog->id,
            'email' => $request->email,
            'comment' => $request->comment,
        ]);
       
        return response()->json(['success'=>'Your comment has been captured pending approval.']);
    }
}
