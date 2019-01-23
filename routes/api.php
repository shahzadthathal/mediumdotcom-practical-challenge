<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('articles', 'ArticleController@index');
#Home page data
Route::get('latest/articles', 'ArticleController@latest');
Route::get('featured/articles', 'ArticleController@featured');
Route::get('topic/wise/articles', 'ArticleController@topicWise');
Route::get('popular/articles', 'ArticleController@popular');
Route::get('article/{id}', 'ArticleController@show');
