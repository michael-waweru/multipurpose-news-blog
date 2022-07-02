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
    public function home()
    {
        $categories = Category::all()->take(2);
        $recent_posts = Blog::orderBy('created_at', 'DESC')->take(2)->get();            
        return view('frontend.index', compact(['categories','recent_posts']));
    }

    public function aboutUs()
    {
        return view('frontend.about');
    }

    public function contactUs()
    {
        return view('frontend.contact-us');
    }

    public function category($slug)
    {
        $category= Category::where('slug', $slug)->first();

        $recent_posts = Blog::where('category_id', $category->id)
                        ->orderBy('created_at', 'DESC')->take(1)->get();

        $blogs= Blog::where('category_id', '=', $category->id)->take(3)->get();
        
        return view('frontend.category',compact(['category','recent_posts','blogs']));
    }

    public function blogDetail($category, $slug)
    {  
        $blogDetail = Blog::where('slug', $slug)->first();
                        
        return view('frontend.blog-detail', compact('blogDetail'));
    }

    public function author($author_name)
    {
        $author_archives = Blog::where('author_name', $author_name)->get();
        $author_name = Blog::where('author_name', $author_name)->first();

        return view('frontend.author',compact(['author_name','author_archives']));
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
