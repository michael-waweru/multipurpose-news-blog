<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\SocialController;
use Illuminate\Support\Facades\Route;

// Frontend Routes
Route::get('/', [FrontendController::class,'home'])->name('homepage');
Route::get('/page/about-us',[FrontendController::class,'aboutUs'])->name('about');
Route::get('page/contact-us',[FrontendController::class,'contactUs'])->name('contact');
Route::post('newsletter-store', [FrontendController::class,'storeNewsletterSubscriber'])->name('subscriber.store');
Route::post('message-store', [FrontendController::class,'storeContactMessage'])->name('contact.store');

Auth::routes();
Route::get('oauth/api/facebook-login', [SocialController::class,'facebookRedirect'])->name('facebook.login');
Route::get('auth/facebook/callback', [SocialController::class,'loginWithFacebook'])->name('facebook.callback');
Route::get('oauth/api/google-login', [SocialController::class,'googleRedirect'])->name('google.login');
Route::get('auth/google/callback', [SocialController::class,'loginWithGoogle'])->name('google.callback');

//Backend Routes

//Admin Routes
Route::prefix('admin')->middleware('auth','isAdmin')->group(function(){
    Route::get('dashboard',[DashboardController::class,'dashboard'])->name('admin.dashboard');
    Route::get('categories',[CategoryController::class,'index'])->name('admin.categories');
    Route::get('categories/create',[CategoryController::class,'addCategory'])->name('admin.category.create');
    Route::get('categories/edit/{slug}',[CategoryController::class,'edit'])->name('admin.category.edit');
    Route::post('category/create/',[CategoryController::class,'storeCategory'])->name('admin.category.store');
    Route::post('category/update/{slug}/',[CategoryController::class,'updateCategory'])->name('admin.category.update');
    Route::delete('category/delete/{slug}/',[CategoryController::class,'deleteCategory'])->name('admin.category.delete');
});