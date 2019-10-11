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
// Admin Controller
// NavBar
Route::get('/admin/navbar','AdminControllers\AdminNavBarController@index');
Route::patch('/admin/navbar','AdminControllers\AdminNavBarController@store');
// Intro section
Route::get('/admin/intro','AdminControllers\AdminIntroController@index');
Route::patch('/admin/intro','AdminControllers\AdminIntroController@store');

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');




// Home Controller
Route::get('/', 'HomeviewController@index'); // Basic View
// Route::get('/','HomeControllers\HomeNavBarItemController@index'); // NavBarView

// Route::get('/','HomeControllers\HomeIntroItemController@index'); // Intro

// Services Controller 
Route::get('/service', 'ServicesviewController@index'); //Basic View
Route::get('/service','ServicesControllers\ServicesNavBarItemController@index');

// Blog Controller
Route::get('/blog', 'BlogviewController@index');
Route::get('/blog','BlogControllers\BlogNavBarItemController@index');
// Contact Controller
Route::get('/contact', 'ContactviewController@index');
Route::get('/contact','ContactControllers\ContactNavBarItemController@index');
// BlogPost Controller
Route::get('/blog-post', 'BlogInfoviewController@index');
Route::get('/blog-post','BlogPostControllers\BlogPostNavBarItemController@index');