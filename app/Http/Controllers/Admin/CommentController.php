<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','isAdmin']);
    }

    public function index()
    {
        $comments = Comment::orderBy('created_at', 'DESC')->get();
        return view('backend.comment.index', compact('comments'));
    }

    public function update($id)
    {
        //update database
        $comment_update = Comment::find($id);
        $comment_update->update(['approval' => 1]);

        if($comment_update)
        {
            toastr()->success('Comment has been updated successfully.');
            return redirect()->route('admin.comments');
        }
    }
}
