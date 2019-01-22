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
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();




#Blog upload multiple images in description
Route::post('admin/ajax/upload/image', 'Admin\ArticlesController@ajaxUploadImageDescription')->name('ajaxUploadImageDescription');

#Admin routes
Route::group(['middleware' => 'isadmin'], function () {

	Route::get('/admin/dashboard/', 'Admin\DashboardController@index')->name('admin-dashboard');

	#Append "admin" before resource controller route
	Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {

		Route::resource('tags', 'TagsController');
		Route::resource('topics', 'TopicsController');
		Route::resource('articles', 'ArticlesController');
	
	});

});


