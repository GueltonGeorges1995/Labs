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
    return view('home');
});
Route::get('/service', function () {
    return view('serviceView');
});

Route::get('/blog', function () {
    return view('blogView');
});

Route::get('/contact', function () {
    return view('contactView');
});

Route::get('/blog-post', function () {
    return view('blogPostView');
});