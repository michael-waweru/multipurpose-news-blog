<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Contact;
use App\Models\NewsletterSubscriber;
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
        $category_slug = Category::where('slug', $slug);
        return view('frontend.category',compact('category_slug'));
    }

    public function storeNewsletterSubscriber(Request $request)
    {       
        if($request->ajax())
        {
            $rules = array(
                'email' => 'required|email'
            );

            $validator = Validator::make($request->all(), $rules);

            if($validator->fails())
            {
                return response()->json([
                    'error' => $validator->errors()->all()
                ]);
            }

            $email = $request->email;

            for($count = 0; $count < count($email); $count++)
            {
                $data = array(
                    'email' => $email[$count],
                );

                $insert_data[] = $data;
            }

            NewsletterSubscriber::store($insert_data);
            return response()->json([
                'success' => 'You have successfully been subscribed.'
            ]);
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

    // public function storeContactMessage(Request $request)
    // {

    //     \DB::table('contacts')->insert([
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'phone' => $request->phone,
    //         'message' => $request->message,
    //     ]);

    //     return response()->json(
    //         [
    //             'success' => true,
    //             'message' => 'Data captured successfully'
    //         ]
    //     );
    // }
}
