<?php


Route::get('/about', function () {
    return view('front.about');
})->name('about');

Route::get('/coming-soon', function () {
    return view('front.coming_soon');
})->name('coming.soon');

Route::get('/', 'ClientController@index');
Route::get('/tutor/{id}', 'ClientController@tutor_details')->name('tut.show');
Route::post('/tutor', 'ClientController@be_a_tutor')->name('tutor.post');
Route::post('/tutor-details', 'ClientController@get_tutor')->name('tutor.details');
Route::get('/contact', 'ContactController@contact')->name('contact');
Route::post('/contact', 'ContactController@store')->name('contact.store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/login', 'Admin\AdminLoginController@showLoginForm');
Route::post('/admin/login', 'Admin\AdminLoginController@login')->name('admin.login');
Route::post('/admin/logout', 'Admin\AdminLoginController@logout')->name('admin.logout');


//Route::group(['middleware'=>'is_admin:admin,admin/login'], function(){
    Route::get('/admin/home', 'Admin\AdminController@index')->name('admin.home');
    Route::get('/admin/contact', 'Admin\AdminController@contacts')->name('admin.contact');
    Route::resource('/admin/category', 'Admin\CategoryController');
    Route::resource('/admin/tutor', 'Admin\TutorController');
    Route::get('/active/{tutor_id}', 'Admin\TutorController@make_tutor_active');
    Route::get('/inactive/{tutor_id}', 'Admin\TutorController@make_tutor_inactive');
    Route::resource('/admin/learner', 'Admin\LearnerController');

//});
