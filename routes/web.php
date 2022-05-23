<?php

use App\Http\Controllers\Frontend\FrontendController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

// Frontend Routes
Route::get('/', [FrontendController::class,'home'])->name('homepage');
