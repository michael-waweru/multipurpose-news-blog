<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogSubscribers;

class BlogAjaxController extends Controller
{
    public function testAjax(Request $request)
    {
        $request->validate([ 

            'email' => 'required|email|unique:blog_subscribers',            
        ]);

       BlogSubscribers::create([
           'email' => $request->email,
       ]);

       return response()->json(['success'=>'You have successfully subscribed to the newsletter!']);
    }
}
