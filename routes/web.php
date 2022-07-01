<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\BlogAjaxController;
use App\Http\Controllers\Frontend\SocialController;
use App\Http\Controllers\Frontend\FrontendController;

// Frontend Routes
Route::get('/', [FrontendController::class,'home'])->name('homepage');
Route::get('/page/about-us',[FrontendController::class,'aboutUs'])->name('about');
Route::get('page/contact-us',[FrontendController::class,'contactUs'])->name('contact');
Route::get('category/{slug}',[FrontendController::class,'category'])->name('category');
Route::get('{category}/article/{slug}', [FrontendController::class,'blogDetail'])->name('blog.detail');
Route::post('newsletter-store', [FrontendController::class,'storeNewsletterSubscriber'])->name('subscriber.store');
Route::post('/message-store', [FrontendController::class,'storeContactMessage'])->name('contact.store');
Route::post('comment-store', [FrontendController::class,'storeBlogComment'])->name('comment.store');
Route::post('/ajax',[BlogAjaxController::class,'testAjax']);

Auth::routes();
Route::get('auth/oauth/initiate/facebook-login', [SocialController::class,'facebookRedirect'])->name('facebook.login');
Route::get('auth/facebook/callback', [SocialController::class,'loginWithFacebook'])->name('facebook.callback');
Route::get('auth/oauth/initiate/google-login', [SocialController::class,'googleRedirect'])->name('google.login');
Route::get('auth/google/callback', [SocialController::class,'loginWithGoogle'])->name('google.callback');

//Backend Routes

//Admin Routes
Route::prefix('admin')->middleware('auth','isAdmin')->group(function(){
    Route::get('dashboard',[DashboardController::class,'dashboard'])->name('admin.dashboard');

    //Blog Routes
    Route::get('categories',[CategoryController::class,'index'])->name('admin.categories');
    Route::get('categories/create',[CategoryController::class,'addCategory'])->name('admin.category.create');
    Route::get('categories/edit/{slug}',[CategoryController::class,'edit'])->name('admin.category.edit');
    Route::post('category/create/',[CategoryController::class,'storeCategory'])->name('admin.category.store');
    Route::post('category/update/{slug}/',[CategoryController::class,'updateCategory'])->name('admin.category.update');
    Route::delete('category/delete/{slug}/',[CategoryController::class,'deleteCategory'])->name('admin.category.delete');

    Route::get('blogs',[BlogController::class,'index'])->name('admin.blogs');
    Route::get('blogs/create',[BlogController::class,'create'])->name('admin.blog.create');
    Route::post('blog/store', [BlogController::class,'store'])->name('admin.blog.store');    
});