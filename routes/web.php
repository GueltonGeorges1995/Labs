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
Route::get('/admin/navbar','AdminControllers\AdminNavBarController@index')->middleware(['admin','auth']);
Route::patch('/admin/navbar','AdminControllers\AdminNavBarController@store')->middleware(['admin','auth']);

// Intro section
Route::get('/admin/intro','AdminControllers\AdminIntroController@index')->middleware(['admin','auth']);
Route::patch('/admin/intro','AdminControllers\AdminIntroController@store')->middleware(['admin','auth']);

// Carousel section
Route::get('/admin/carousel','AdminControllers\AdminCarouselController@index')->middleware(['admin','auth']);
Route::patch('/admin/carousel','AdminControllers\AdminCarouselController@store')->middleware(['admin','auth']);
Route::get('/admin/carousel/{id}/delete','AdminControllers\AdminCarouselController@delete')->middleware(['admin','auth']);


// Service section
Route::get('/admin/service','AdminControllers\AdminServiceController@index')->middleware(['admin','auth']);
Route::get('/admin/service/{id}/delete','AdminControllers\AdminServiceController@delete')->middleware(['admin','auth']);
Route::patch('/admin/service','AdminControllers\AdminServiceController@create')->middleware(['admin','auth']);

Route::get('/admin/service/{id}/update','AdminControllers\AdminServiceController@indexStore')->middleware(['admin','auth']);
Route::patch('/admin/service/{id}/update','AdminControllers\AdminServiceController@store')->middleware(['admin','auth']);


// About section
Route::get('/admin/about','AdminControllers\AdminAboutController@index')->middleware(['admin','auth']);
Route::patch('/admin/about','AdminControllers\AdminAboutController@store')->middleware(['admin','auth']);


// Testimonial section
Route::get('/admin/testimonial','AdminControllers\AdminTestimonialController@index')->middleware(['admin','auth']);
Route::get('/admin/testimonial/{id}/delete','AdminControllers\AdminTestimonialController@delete')->middleware(['admin','auth']);
Route::patch('/admin/testimonial','AdminControllers\AdminTestimonialController@create')->middleware(['admin','auth']);

Route::get('/admin/testimonial/{id}/update','AdminControllers\AdminTestimonialController@indexStore')->middleware(['admin','auth']);
Route::patch('/admin/testimonial/{id}/update','AdminControllers\AdminTestimonialController@store')->middleware(['admin','auth']);

// Titres section
Route::get('/admin/titre','AdminControllers\AdminTitreController@index')->middleware(['admin','auth']);
Route::patch('/admin/titre','AdminControllers\AdminTitreController@store')->middleware(['admin','auth']);


// team section
Route::get('/admin/team','AdminControllers\AdminTeamController@index')->middleware(['admin','auth']);

Route::patch('/admin/leader','AdminControllers\AdminTeamController@storeBoss')->middleware(['admin','auth']);
Route::patch('/admin/team','AdminControllers\AdminTeamController@create')->middleware(['admin','auth']);

Route::get('/admin/team/{id}/delete','AdminControllers\AdminTeamController@delete')->middleware(['admin','auth']);

Route::get('/admin/team/{id}/update','AdminControllers\AdminTeamController@indexStore')->middleware(['admin','auth']);
Route::patch('/admin/team/{id}/update','AdminControllers\AdminTeamController@store')->middleware(['admin','auth']);


// Contact section
Route::get('/admin/contact','AdminControllers\AdminContactController@index')->middleware(['admin','auth']);
Route::patch('/admin/contact','AdminControllers\AdminContactController@store')->middleware(['admin','auth']);


// Project section
Route::get('/admin/project','AdminControllers\AdminProjectController@index')->middleware(['admin','auth']);
Route::patch('/admin/project','AdminControllers\AdminProjectController@create')->middleware(['admin','auth']);

Route::get('/admin/project/{id}/delete','AdminControllers\AdminProjectController@delete')->middleware(['admin','auth']);

Route::get('/admin/project/{id}/update','AdminControllers\AdminProjectController@indexStore')->middleware(['admin','auth']);
Route::patch('/admin/project/{id}/update','AdminControllers\AdminProjectController@store')->middleware(['admin','auth']);




// ---- Article section ----

// Tag section
Route::get('/admin/tag','AdminControllers\AdminTagController@index')->middleware(['auth','test']);
Route::patch('/admin/tag','AdminControllers\AdminTagController@create')->middleware(['auth','test']);

Route::get('/admin/tag/{id}/delete','AdminControllers\AdminTagController@delete')->middleware(['auth','test']);

Route::get('/admin/tag/{id}/update','AdminControllers\AdminTagController@indexStore')->middleware(['auth','test']);
Route::patch('/admin/tag/{id}/update','AdminControllers\AdminTagController@store')->middleware(['auth','test']);

// Category section
Route::get('/admin/category','AdminControllers\AdminCategoryController@index')->middleware(['auth','test']);
Route::patch('/admin/category','AdminControllers\AdminCategoryController@create')->middleware(['auth','test']);
Route::get('/admin/category/{id}/delete','AdminControllers\AdminCategoryController@delete')->middleware(['auth','test']);
Route::get('/admin/category/{id}/update','AdminControllers\AdminCategoryController@indexStore')->middleware(['auth','test']);
Route::patch('/admin/category/{id}/update','AdminControllers\AdminCategoryController@store')->middleware(['auth','test']);

// Article section
Route::get('/admin/article','AdminControllers\AdminArticleController@index')->middleware(['admin','auth','test']);
Route::patch('/admin/article','AdminControllers\AdminArticleController@create')->middleware(['auth','test']);
Route::get('/admin/article/{id}/delete','AdminControllers\AdminArticleController@delete')->middleware(['auth','test']);

Route::get('/admin/article/{id}/update','AdminControllers\AdminArticleController@indexStore')->middleware(['auth','test']);
Route::patch('/admin/article/{id}/update','AdminControllers\AdminArticleController@store')->middleware(['auth','test']);

Route::patch('/admin/article/{id}/validate','AdminControllers\AdminArticleController@validation')->middleware(['auth','test']);

Route::get('/editeur/article','AdminControllers\AdminArticleController@editeur')->middleware(['auth','test']);




// User section
Route::get('/admin/user','AdminControllers\AdminUserController@index')->middleware(['admin','auth']);
Route::patch('/admin/user','AdminControllers\AdminUserController@create')->middleware(['admin','auth']);
Route::get('/admin/user/{id}/delete','AdminControllers\AdminUserController@delete')->middleware(['admin','auth']);
Route::get('/admin/user/{id}/update','AdminControllers\AdminUserController@indexStore')->middleware(['auth','admin']);
Route::patch('/admin/user/{id}/update','AdminControllers\AdminUserController@store')->middleware(['auth','admin']);


Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');


Route::get('/home','AdminControllers\AdminHomeController@index')->middleware('auth');
Route::patch('/home/update','AdminControllers\AdminHomeController@store')->middleware('auth');

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
Route::get('/search','BlogControllers\BlogNavBarItemController@search');
Route::get('/blog/category/{id}','BlogControllers\BlogNavBarItemController@category');
Route::get('/blog/tag/{id}','BlogControllers\BlogNavBarItemController@tag');

// Contact Controller
Route::get('/contact', 'ContactviewController@index');
Route::get('/contact','ContactControllers\ContactNavBarItemController@index');
// Mail

Route::post('/contact','ContactControllers\ContactNavBarItemController@store');




// BlogPost Controller
Route::get('/blog-post/{id}', 'BlogInfoviewController@index');

Route::get('/blog-post/{id}','BlogPostControllers\BlogPostNavBarItemController@index');
Route::patch('/blog-post/{id}/message','BlogPostControllers\BlogPostNavBarItemController@store');

