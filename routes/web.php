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

// Carousel section
Route::get('/admin/carousel','AdminControllers\AdminCarouselController@index');
Route::patch('/admin/carousel','AdminControllers\AdminCarouselController@store');
Route::get('/admin/carousel/{id}/delete','AdminControllers\AdminCarouselController@delete');


// Service section
Route::get('/admin/service','AdminControllers\AdminServiceController@index');
Route::get('/admin/service/{id}/delete','AdminControllers\AdminServiceController@delete');
Route::patch('/admin/service','AdminControllers\AdminServiceController@create');

Route::get('/admin/service/{id}/update','AdminControllers\AdminServiceController@indexStore');
Route::patch('/admin/service/{id}/update','AdminControllers\AdminServiceController@store');


// About section
Route::get('/admin/about','AdminControllers\AdminAboutController@index');
Route::patch('/admin/about','AdminControllers\AdminAboutController@store');


// Testimonial section
Route::get('/admin/testimonial','AdminControllers\AdminTestimonialController@index');
Route::get('/admin/testimonial/{id}/delete','AdminControllers\AdminTestimonialController@delete');
Route::patch('/admin/testimonial','AdminControllers\AdminTestimonialController@create');

Route::get('/admin/testimonial/{id}/update','AdminControllers\AdminTestimonialController@indexStore');
Route::patch('/admin/testimonial/{id}/update','AdminControllers\AdminTestimonialController@store');

// Titres section
Route::get('/admin/titre','AdminControllers\AdminTitreController@index');
Route::patch('/admin/titre','AdminControllers\AdminTitreController@store');


// team section
Route::get('/admin/team','AdminControllers\AdminTeamController@index');

Route::patch('/admin/leader','AdminControllers\AdminTeamController@storeBoss');
Route::patch('/admin/team','AdminControllers\AdminTeamController@create');

Route::get('/admin/team/{id}/delete','AdminControllers\AdminTeamController@delete');

Route::get('/admin/team/{id}/update','AdminControllers\AdminTeamController@indexStore');
Route::patch('/admin/team/{id}/update','AdminControllers\AdminTeamController@store');


// Contact section
Route::get('/admin/contact','AdminControllers\AdminContactController@index');
Route::patch('/admin/contact','AdminControllers\AdminContactController@store');








Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');




// Home Controller
Route::get('/', 'HomeviewController@index'); // Basic View


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