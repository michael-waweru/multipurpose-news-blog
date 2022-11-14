<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Frontend\PostsController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Frontend\SocialController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\User\UserDashboardController;
use App\Http\Controllers\Frontend\CategoriesController;
use App\Http\Controllers\Author\AuthorDashboardController;

// Frontend Routes
Route::get('/', [FrontendController::class,'home'])->name('homepage');
Route::get('/page/about-us',[FrontendController::class,'aboutUs'])->name('about');
Route::get('page/contact-us',[FrontendController::class,'contactUs'])->name('contact');
Route::get('category/{slug}',[CategoriesController::class,'category'])->name('category');
Route::get('{category}/article/{slug}', [PostsController::class,'blogDetail'])->name('blog.detail');
Route::get('author-archive/{slug}',[PostsController::class,'author'])->name('author');
Route::post('newsletter-store', [FrontendController::class,'storeNewsletterSubscriber'])->name('subscriber.store');
Route::post('/message-store', [FrontendController::class,'storeContactMessage'])->name('contact.store');
Route::post('comment-store/{slug}', [FrontendController::class,'storeBlogComment'])->name('comment.store');
Route::post('/store-subscriber',[PostsController::class,'storeBlogSubscribers']);
Route::get('/share-post',[FrontendController::class, 'share']);

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
    Route::get('blog/edit/{slug}',[BlogController::class,'edit'])->name('admin.blog.edit');
    Route::post('blog/update/{slug}',[BlogController::class,'update'])->name('admin.blog.update');
    Route::post('publish/{id}',[BlogController::class,'publish'])->name('publish');
    Route::post('unpublish/{id}',[BlogController::class,'unpublish'])->name('unpublish');
    Route::get('blog/subscribers',[BlogController::class,'subscribers'])->name('admin.blog.subscribers');
    
    //comment section
    Route::get('comments',[CommentController::class,'index'])->name('admin.comments');
    Route::put('comment/update/{id}',[CommentController::class,'update'])->name('admin.comment.update');

    //profile section
    Route::get('profile', [ProfileController::class,'index'])->name('admin.profile');
    Route::get('profile/socials', [ProfileController::class,'socials'])->name('admin.profile.socials');
    Route::get('profile/basic-info', [ProfileController::class,'create'])->name('profile.basic');
    Route::get('profile/{id}/edit',[ProfileController::class,'edit'])->name('profile.edit.basic');
    Route::get('profile/security',[ProfileController::class,'security'])->name('profile.security');
    Route::get('profile/{id}/update-password',[ProfileController::class,'updatepassword'])->name('profile.password');
    Route::post('profile/update-password',[ProfileController::class,'storeUpdatedpassword'])->name('profile.password.update');
    Route::post('profile/post',[ProfileController::class,'store'])->name('admin.profile.store');
    Route::post('profile/update/{slug}',[ProfileController::class,'update'])->name('profile.update.basic');

     //users
     Route::get('users',[UserController::class,'index'])->name('admin.users');
     Route::get('user/create', [UserController::class,'create'])->name('admin.user.add');
     Route::post('users/user',[UserController::class,'store'])->name('admin.user.create');
     Route::delete('user/{id}',[UserController::class,'destroy'])->name('admin.user.delete');
});

Route::prefix('author')->middleware(['auth','isAuthor'])->group(function(){
    Route::get('dashboard', [AuthorDashboardController::class,'index'])->name('author.dashboard');
});

Route::prefix('user')->middleware(['auth','isUser'])->group(function(){
    Route::get('dashboard', [UserDashboardController::class,'index'])->name('user.dashboard');
});

//page configurations
Route::get('config', [ConfigController::class,'index'])->name('config');