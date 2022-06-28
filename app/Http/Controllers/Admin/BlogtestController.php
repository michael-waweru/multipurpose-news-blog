<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class BlogtestController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = Validator::make($request->all(),[
            'title' => 'required|max:255',
            'category_id' => 'required',
            'published_by' => 'in:this_account,guest_author',
            'read_time' => 'required|integer',
            'status' => 'in:published,draft',
            'short_description' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg,svg|max:2048',
        ]);

        if($validatedData->fails())
        {
            toastr()->error($validatedData->errors()->first());
            return back();
        }

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

        $tags = explode(", ", $input['tags']);        

        $blog_data = Blog::create($input);
        $blog_data->image = $imageName;
        $blog_data->tag($tags);
        $blog_data->author_name = $author_name;
        $blog_data->user_id = $user_id;
        $blog_data->category_name = $category->category_name;

        if ($blog_data->save()) {
            toastr()->success('Blog Created Successfully');
            return redirect()->route('admin.blogs');
        } 
    }
}
