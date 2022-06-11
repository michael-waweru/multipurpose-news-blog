<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('backend.blog.index',compact('blogs'));
    }

    public function create()
    {        
        $categories = Category::all();

        if(count($categories) > 0)
        {
            return view('backend.blog.create',compact('categories'));    
        }
        else{            
            toastr()->info('Please create a category first');
            return redirect()->route('admin.category.create');
        }
    }

    public function storeBlog(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'read_time' => 'required|integer',
            'published_by' => 'required',
            'category_id' => 'required',
            'short_description' => 'required',
            'description' => 'required',
            'status' => 'required',
        ]);

        if ($validator->fails()) {
            toastr()->error($validator->errors()->first());
            return back();
        }

        else
        {
            $input = $request->all();
            
            $imageName = time().'.'.$request->image->extension();
            $request->image->storeAs('blog', $imageName);

            //set author
            $author_name = null;
            $user_id = null;

            //Get category
            $category = Category::find($input['category_id']);

            if($input['posted_by'] == "this_account")
            {
                $author_name = Auth::user()->name;
                $user_id = Auth::id();
            }

            $blog = new Blog();           

            $blog->title = $request->title;
            $blog->read_time = $request->read_time;
            $blog->category_id = $request->category_id;
        }
    }
}
