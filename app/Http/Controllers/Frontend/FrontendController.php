<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Contact;
use App\Models\NewsletterSubscriber;
use Conner\Tagging\Model\Tagged;
use Illuminate\Http\Request;
use Validator;

class FrontendController extends Controller
{
    public function home()
    {
        $categories = Category::all()->take(2);
        return view('frontend.index', compact('categories'));
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

    public function blogDetail($slug)
    {
        $blogDetail = Blog::where('slug',$slug)->first();
        return view('frontend.blog-detail', compact('blogDetail'));
    }

    public function storeNewsletterSubscriber(Request $request)
    {       
        // if($request->ajax())
        // {
        //     $rules = array(
        //         'email' => 'required|email'
        //     );

        //     $validator = Validator::make($request->all(), $rules);

        //     if($validator->fails())
        //     {
        //         return response()->json([
        //             'error' => $validator->errors()->all()
        //         ]);
        //     }

        //     $email = $request->email;

        //     for($count = 0; $count < count($email); $count++)
        //     {
        //         $data = array(
        //             'email' => $email[$count],
        //         );

        //         $insert_data[] = $data;
        //     }

        //     NewsletterSubscriber::store($insert_data);
        //     return response()->json([
        //         'success' => 'You have successfully been subscribed.'
        //     ]);
        // }

        $validatedData = Validator::make($request->all(),
        [
            'email' => 'required|email|unique:newsletter_subscribers',
        ]);

        if($validatedData->fails())
        {
            toastr()->error($validatedData->errors()->first());
            return back();
        }        

        $newsletter_subscriber = new NewsletterSubscriber();
        $newsletter_subscriber->email = $request->email;

        if($newsletter_subscriber->save())
        {
            toastr()->success('We have captured your data');
            return back();
        }
    }

    public function storeContactMessage(Request $request)
    {
        $request->validate([
            'name'    => 'required',
            'email'   => 'required|email|unique:users',            
            'message' => 'required'
        ]);

        // Contact::create($request->all());

        $newContact = new Contact();
        $newContact->name = $request->name;
        $newContact->email = $request->email;
        $newContact->phone = $request->phone;
        $newContact->message = $request->message;      

        if($newContact->save())
        {
            toastr()->success('We have captured your data. Stay woke!');
            return redirect()->route('contact');
        }      
    }    
}
