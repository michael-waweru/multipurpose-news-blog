<?php

namespace App\Http\Controllers\Frontend;

use Validator;
use App\Models\Blog;
use App\Models\User;
use App\Models\Comment;
use App\Models\Contact;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class FrontendController extends Controller
{ 
    public function home(Category $category)
    {
        $recent_posts = Blog::orderBy('created_at', 'DESC')->take(2)->get();
        $blogs = Blog::inRandomOrder()->take(2)->get();
        $todaysHighlights = Blog::orderBy('created_at', 'DESC')->take(5)->get();
        $editorPicked = Blog::inRandomOrder()->take(2)->get();
        $authorBoard = User::where('role_id', '=', 1)
                            ->inRandomOrder()->first();
        $recentsSection = Blog::orderBy('created_at', 'DESC')->first();

        return view('frontend.index', compact(['recent_posts','blogs','todaysHighlights','editorPicked','authorBoard','recentsSection']));
    }

    public function aboutUs()
    {
        return view('frontend.about');
    }

    public function contactUs()
    {
        return view('frontend.contact-us');
    }

    public function storeContactMessage(Request $request)
    {     
        $request->validate([
            'name'    => 'required',
            'email'   => 'required|email|unique:contacts',            
            'message' => 'required'
        ]);

        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ]);
       
        return response()->json(['success'=>'We have successfully captured your message. Standby for a reply.']);             
    }

    public function storeBlogComment(Request $request)
    {
        $rules = array(
            'email' => 'email|unique:comments',
            'name' => 'required|string',
            'comment' => 'required'
        );   

        $messages = array(
            'name.required' => 'The name field is required.',
            'email.unique' => 'We have already captured data from this email.',
            'email.email' => 'Please enter a valid email address.',
            'comment.required' => 'The comments field is a required field.',
        );
                    
        $validatedData = Validator::make( $request->all(), $rules, $messages);

        if($validatedData->fails())
        {
            toastr()->error($validatedData->errors()->first());
            return back();
        }

        // $blog = Blog::where('slug', $slug)->first();

        $comment = new Comment();
        // $comment->blog_id = $this->blog->id;
        $comment->name = $request->name;
        $comment->email = $request->email;
        $comment->comment = $request->comment;

        if($comment->save())
        {
            toastr()->success('Your comment has been saved pending approval. Standby!');
            return back();
        }
    }
}
