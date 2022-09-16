<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use App\Models\User;
use App\Models\Comment;
use App\Models\BlogSubscribers;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','isAdmin']);
    }

    public function dashboard()
    {
        $allSystemUsers = User::all();
        $allBlogs = Blog::where('status','published')->get();
        $pendingBlogs = Blog::where('status','draft')->get();
        $pendingComments = Comment::where('approval','0')->get();
        $newsletter_subscribers = BlogSubscribers::all();        
        return view('backend.dashboard.index',compact([
            'allSystemUsers','allBlogs','pendingComments','pendingBlogs','newsletter_subscribers'
        ]));
    }
}
