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


// Project section
Route::get('/admin/project','AdminControllers\AdminProjectController@index');
Route::patch('/admin/project','AdminControllers\AdminProjectController@create');

Route::get('/admin/project/{id}/delete','AdminControllers\AdminProjectController@delete');

Route::get('/admin/project/{id}/update','AdminControllers\AdminProjectController@indexStore');
Route::patch('/admin/project/{id}/update','AdminControllers\AdminProjectController@store');




// ---- Article section ----

// Tag section
Route::get('/admin/tag','AdminControllers\AdminTagController@index');
Route::patch('/admin/tag','AdminControllers\AdminTagController@create');

Route::get('/admin/tag/{id}/delete','AdminControllers\AdminTagController@delete');

Route::get('/admin/tag/{id}/update','AdminControllers\AdminTagController@indexStore');
Route::patch('/admin/tag/{id}/update','AdminControllers\AdminTagController@store');

// Category section
Route::get('/admin/category','AdminControllers\AdminCategoryController@index');
Route::patch('/admin/category','AdminControllers\AdminCategoryController@create');
Route::get('/admin/category/{id}/delete','AdminControllers\AdminCategoryController@delete');
Route::get('/admin/category/{id}/update','AdminControllers\AdminCategoryController@indexStore');
Route::patch('/admin/category/{id}/update','AdminControllers\AdminCategoryController@store');

// Article section
Route::get('/admin/article','AdminControllers\AdminArticleController@index')->middleware('auth');
Route::patch('/admin/article','AdminControllers\AdminArticleController@create')->middleware('auth');
Route::get('/admin/article/{id}/delete','AdminControllers\AdminArticleController@delete');

Route::get('/admin/article/{id}/update','AdminControllers\AdminArticleController@indexStore')->middleware('auth');
Route::patch('/admin/article/{id}/update','AdminControllers\AdminArticleController@store')->middleware('auth');

Route::patch('/admin/article/{id}/validate','AdminControllers\AdminArticleController@validation')->middleware('auth');














Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');




// Home Controller
Route::get('/', 'HomeviewController@index'); // Basic View
Route::post('/', 'HomeviewController@store');

// Services Controller 
Route::get('/service', 'ServicesviewController@index'); //Basic View
Route::get('/service','ServicesControllers\ServicesNavBarItemController@index');
Route::post('/service','ServicesControllers\ServicesNavBarItemController@store');

Route::patch('/service/new','ServicesControllers\ServicesNavBarItemController@email');
// Blog Controller
Route::get('/blog', 'BlogviewController@index');
Route::get('/blog','BlogControllers\BlogNavBarItemController@index');
Route::get('/blog-post/{id}','BlogControllers\BlogNavBarItemController@indexStore');

// Contact Controller
Route::get('/contact', 'ContactviewController@index');
Route::get('/contact','ContactControllers\ContactNavBarItemController@index');
// Mail

Route::post('/contact','ContactControllers\ContactNavBarItemController@store');




// BlogPost Controller
Route::get('/blog-post/{id}', 'BlogInfoviewController@index');

Route::get('/blog-post/{id}','BlogPostControllers\BlogPostNavBarItemController@index');
Route::patch('/blog-post/{id}/message','BlogPostControllers\BlogPostNavBarItemController@store');

