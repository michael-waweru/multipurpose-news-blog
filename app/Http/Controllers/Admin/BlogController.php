<?php

namespace App\Http\Controllers\Admin;

use Image;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
// use Intervention\Image\Image;
use App\Models\BlogSubscribers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class BlogController extends Controller
{
    public function __construct()
    {
        return $this->middleware(['auth','isAdmin']);
    }
    public function index()
    {
        $blogs = Blog::orderBy('created_at','DESC')->get();
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

    public function edit($slug)
    {
        $blog = Blog::where('slug',$slug)->first();
        $categories = Category::all();
        return view('backend.blog.edit', compact('blog','categories'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'title' => 'required|max:255',
            'read_time' => 'required|integer',
            'published_by' => 'in:this_account,guest_author',
            'category_id' => 'required',
            'short_description' => 'required',
            'description' => 'required',
            'status' => 'in:published,draft',
            'is_live' => 'in:isLive,notLive',
            'image' => 'required|mimes:jpg,jpeg,svg,png,webp|max:2048',
        ]);

        //check validation
        if ($validator->fails())
        {
            toastr()->error($validator->errors()->first());
            return back();
        }

        //capture data to store in DB
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

        $tags = explode(", ", $input['tags']);

        $blog_data = Blog::create($input);
        $blog_data->image = $imageName;
        $blog_data->status;
        $blog_data->tag($tags);
        $blog_data->author_name = $author_name;
        $blog_data->user_id = $user_id;
        $blog_data->category_name = $category->category_name;

        // dd($blog_data);

        if($blog_data->save()){
            toastr()->success('Blog created successfully');
            return redirect()->route('admin.blogs');
        }
    }

    public function update(Request $request, $slug)
    {
        $validator = Validator::make($request->all(),[
            'title' => 'required|max:255',
            'read_time' => 'required|integer',
            'published_by' => 'in:this_account,guest_author',
            'category_id' => 'required',
            'short_description' => 'required',
            'description' => 'required',
            'status' => 'in:published,draft',
            'is_live' => 'in:isLive,notLive',
            'image' => 'nullable|mimes:jpg,jpeg,svg,png|max:2048',
        ]);

        if ($validator->fails())
        {
            toastr()->error($validator->errors()->first());
            return back();
        }

        $blog = Blog::where('slug', $slug)->first();
        $blog->slug = null;

        $data = $request->all();
        if($image = $request->file('image'))
        {
            $imageName = time().'.'.$request->image->extension();
            $image->storeAs('blog', $imageName);
            $data['image'] = $imageName;
        } else{
            unset($data['image']);
        }

        if($blog->update($data))
        {
            toastr()->success('Blog Updated Successfully.');
            return redirect()->route('admin.blogs');
        }
    }

    public function unpublish($id)
    {
        $unpublishBlog = Blog::find($id);
        $unpublishBlog->status === 'draft';

        if($unpublishBlog->update())
        {
            toastr()->success('Status changed to unpublished');
            return redirect()->route('admin.blogs');
        }
    }

    public function publish($id)
    {
        $publishBlog = Blog::find($id);
        $publishBlog->update(['status' => 'published']);

        if($publishBlog)
        {
            toastr()->success('Status changed to published');
            return redirect()->route('admin.blogs');
        }
    }

    public function subscribers()
    {
        $subscribers = BlogSubscribers::all();
        return view('backend.blog.subscribers', compact('subscribers'));
    }

    public function destroy($slug)
    {
        $blog = Blog::where('slug', $slug)->first();

        $folder = 'storage/blog';

        File::delete(public_path($folder.$blog->image));

        if($blog->delete())
        {
            toastr()->success('Blog Deleted Successfully.');
            return redirect()->route('admin.blogs');            
        }
        
    }

}
