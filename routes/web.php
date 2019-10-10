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


// Route::get('/blog', function () {
//     return view('blogView');
// });

Route::get('/contact', function () {
    return view('contactView');
});

Route::get('/blog-post', function () {
    return view('blogPostView');
});
Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');




// Home Controller
Route::get('/', 'HomeviewController@index'); // Basic View
Route::get('/','HomeControllers\HomeNavBarItemController@index'); // NavBarView

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