<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\NewsletterSubscriber;
use Illuminate\Http\Request;
use Validator;

class FrontendController extends Controller
{
    public function home()
    {
        return view('frontend.index');
    }

    public function aboutUs()
    {
        return view('frontend.about');
    }

    public function contactUs()
    {
        return view('frontend.contact-us');
    }

    public function storeNewsletterSubscriber(Request $request)
    {
        // $subscriber = new NewsletterSubscriber();       
        // $subscriber->email = $request->email;       
        // $subscriber->save();
        // return response()->json(['success' => true]);

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
}
