<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
Route::group(['middleware' => ['auth']], function()
{
	// show new post form
	Route::get('new-news','NewsController@create');
});
*/


Route::group(['prefix' => 'api/v1'], function(){
    Route::get('news','Api\HomeController@news_note');
    Route::get('news/{id}','Api\HomeController@news_detail')->where('id', '[0-9]+');

    Route::get('note','Api\HomeController@note_preview');
    Route::get('note/{id}','Api\HomeController@note_detail')->where('id', '[0-9]+');

    Route::get('locations','Api\HomeController@locations');
    Route::get('locations/{id}','Api\HomeController@location_detail')->where('id', '[0-9]+');

    Route::get('reviews/{id}','Api\HomeController@location_reviews')->where('id', '[0-9]+');
});





Route::get('edit/surpass_test', ['as' => 'home.surpass_test', 'uses' => 'SurpassTestController@surpass_test']);
Route::post('surpass_upload_test', ['as' => 'news_image_upload', 'uses' => 'SurpassTestController@surpass_upload_test']);
Route::post('surpass_remove_test', ['as' => 'news_image_remove', 'uses' => 'SurpassTestController@surpass_remove_test']);


//Route::get('surpass_test', ['as' => 'home.surpass_test', 'uses' => 'SurpassTestController@surpass_test']);
Route::post('news_image_upload', ['as' => 'news_image_upload', 'uses' => 'NewsController@image_upload']);
Route::post('news_image_remove', ['as' => 'news_image_remove', 'uses' => 'NewsController@image_remove']);

Route::get('/',['as' => 'home', 'uses' => 'HomeController@index']);

Route::get('/home',['as' => 'lala', 'uses' => 'DashboardController@home']);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::group(['middleware' => ['auth']], function()
{
	// show new post form
	Route::get('new-news','NewsController@create');
	
	// save new post
	Route::post('new-news','NewsController@store');
	
	// edit post form
	Route::get('edit/{id}','NewsController@edit');
	
	// update post
	Route::post('update','NewsController@update');
	
	// delete post
	Route::get('delete/{id}','NewsController@destroy');
	
	// display user's all posts
	Route::get('my-all-news','UserController@admin_news_all');
	
	// display user's drafts
	Route::get('my-drafts','UserController@admin_news_draft');
	
	
	// add comment
	Route::post('comment/add','CommentController@store');
	
	// delete comment
	Route::post('comment/delete/{id}','CommentController@distroy');
	
});

//users profile
Route::get('user/{id}','UserController@profile')->where('id', '[0-9]+');

// display list of posts
Route::get('user/{id}/posts','UserController@admin_news')->where('id', '[0-9]+');

// display single post
Route::get('/{id}',['as' => 'post', 'uses' => 'NewsController@show'])->where('id', '[0-9]+');
