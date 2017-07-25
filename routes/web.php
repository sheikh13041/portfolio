<?php

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

Route::get('/', function () {
   return view('index');
});
Route::get('/why', function () {
   return view('why-choose-us');
});
Route::get('/about', function () {
   return view('about-us');
});
Route::get('/cart', function () {
   return view('cart');
});
Route::get('/checkout', function () {
   return view('checkout');
});
Route::get('/course', function () {
   return view('course-details');
});
Route::get('/courses', function () {
   return view('courses');
});
Route::get('/login', function () {
   return view('login');
});
Route::get('/register', function () {
   return view('register');
});
Route::get('/wishlist', function () {
   return view('wishlist');
});




