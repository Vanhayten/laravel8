<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackEnd\PostController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\Auth\VerificationController;
use Illuminate\Auth\Middleware\EnsureEmailIsVerified;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes(['verify'=> true]);



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home') ->middleware('verified');


Route::get('/',function (){
    return 'Home';
});

Route::get('index',[PostController::class,'getindex']);

Route::get('/landing',function (){
   return view('landing');
});

Route::get('/dashboard',function (){
    return view('dashboard');
});


Route::get('/about',function (){
    return view('about');
});




