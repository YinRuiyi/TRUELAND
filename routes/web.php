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

// Route::get('', function(){
// 		return view('Index.index');
// 	});
//后台路由组
Route::group([],function(){
	Route::get('/admin', function(){
		return view('admin.index');
	});
	Route::resource('/admin/user','UserController');
	Route::resource('/admin/focus','FocusController');
	Route::resource('/admin/series','SeriesController');
	Route::resource('/admin/team','TeamController');
	Route::resource('/admin/news','NewsController');
	Route::resource('/admin/partners','PartnersController');
	Route::resource('/admin/article','ArticleController');

});

//前台路由组
Route::group([],function(){
	Route::get('/','IndexController@index');
	Route::get('/fuwu','IndexController@fuwu');
});         