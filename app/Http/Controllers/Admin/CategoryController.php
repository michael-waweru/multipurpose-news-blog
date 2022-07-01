<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;


class CategoryController extends Controller
{
    public function __construct(Type $args)
    {
        return $this->middleware(['auth','isAdmin']);
    }
    
    public function index()
    {
        $all_categories = Category::all();
        return view('backend.category.index',compact('all_categories'));
    }

    public function addCategory()
    {
        return view('backend.category.create');
    }

    public function storeCategory(Request $request)
    {
       $validator = Validator::make($request->all(), [
           'category_name' => 'required|string|max:255',
           'description' => 'required',
       ]);

       if ($validator->fails()) {        
            toastr()->error($validator->errors()->first());
            return back();
            //    return response()->json([
        //        'status' => 400,
        //        'errors' => $validator->messages(),
        //    ]);
       }
       else {
           $category = new Category();
           $category->category_name = $request->input('category_name');
           $category->description = $request->input('description');
           
           $category->save();
           if ($category->save()) {
               toastr()->success('Category saved successfully');
               return redirect()->route('admin.categories');
           }

        //    return response()->json([
        //        'status' => 200,
        //        'message' => 'Category Created Successfully', 
        //    ]);
       }
    }

    public function edit($slug)
    {
        $category = Category::where(['slug' => $slug])->first();
        return view('backend.category.edit', compact('category'));
    }

    public function updateCategory(Request $request, $slug)
    {
        $category = Category::where(['slug' => $slug])->first();
        $category->slug = null;

        $validator = Validator::make($request->all(), [
            'category_name' => 'required|string|max:255',
        ]);

        if($validator->fails())
        {
            toastr()->error($validator->errors());
            return back();
        }

        else
        {
            $category_update = $request->all();

            if ($category->update($category_update)) {
                toastr()->success('Category has been updated successfully');
                return redirect()->route('admin.categories');
            }
        }
    }

    public function deleteCategory($slug)
    {
        $category = Category::where('slug', $slug)->first();

        if ($category->delete()) {
            toastr()->success('Category deleted successfully');
            return redirect()->route('admin.categories');
        }
    }
}
