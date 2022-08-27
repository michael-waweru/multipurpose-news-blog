<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShareButtonsController extends Controller
{
    public function socialShareButtons()
    {
        $socialShare = Share::page(
            '{{ env(APP_URL) }}', 'Sharing with social media links'
        )
        ->facebook()
        ->twitter()
        ->linkedin()
        ->whatsapp()
        ->telegram();

        return view('frontend.blog-detail', compact('socialShare'));
    }    
}
