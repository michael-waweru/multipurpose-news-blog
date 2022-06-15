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
            'title' => 'required|max:255',
            'read_time' => 'required|integer',
            'published_by' => 'in:this_account,guest_author',
            'category_id' => 'required',
            'short_description' => 'required',
            'description' => 'required',
            'status' => 'in:published,draft',
            'image' => 'required|mimes:jpg|png|gif|svg|max:2048',
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

            if($input['published_by'] == "this_account")
            {
                $author_name = Auth::user()->name;
                $user_id = Auth::id();
            }

            $tags = explode(" ", $input['tags']);

            $blog_data = Blog::create($input['blog_id']);
            $blog_data->image = $imageName;
            $blog_data->tag($tags);
            $blog_data->author_name = $author_name;
            $blog_data->user_id = $user_id;
            $blog_data->category_name = $category->category_name;

            if($blog_data->save()){
                toastr()->success('Blog created successfully');
                return redirect()->route('admin.blogs');
            }
        }
    }
}
