<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

// Home Page Route
Route::get('/' ,[UserController::class , 'index'])->name('home_page');

// Service Page Route
Route::get('/services' , function(){
    return view('services');
})->name('service_page');

// About Page Route
Route::get('/about' , function(){
    return view('about');
})->name('about_page');

//Contact Page Route
Route::get('/contact' , function(){
    return view('contact');
})->name('contact_page');
// Received Messages 
Route::post('/contact',[UserController::class , 'feedback']);

// Sign In Page Route 
Route::get('/signin' , function(){
    return view('sign-in');
})->name('sign_in');
// Sign In user into Website
Route::post('/signin',[UserController::class , 'signIn']);

// Sign Up Page Route
Route::get('/signup' , function(){
    return view('sign-up');
})->name('sign_up');
// RegisterCustomer
Route::post('/register' , [UserController::class , 'register']);