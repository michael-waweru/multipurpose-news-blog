<?php

use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\SocialController;
use Illuminate\Support\Facades\Route;

// Frontend Routes
Route::get('/', [FrontendController::class,'home'])->name('homepage');
Route::get('/page/about-us',[FrontendController::class,'aboutUs'])->name('about');
Route::get('page/contact-us',[FrontendController::class,'contactUs'])->name('contact');
Route::post('newsletter-store', [FrontendController::class,'storeNewsletterSubscriber'])->name('subscriber.store');

Auth::routes();
Route::get('auth/facebook', [SocialController::class,'facebookRedirect'])->name('facebook.login');
Route::get('auth/facebook/callback', [SocialController::class,'loginWithFacebook'])->name('facebook.callback');