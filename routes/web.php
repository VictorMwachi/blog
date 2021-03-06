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
Route::group(['middleware'=>['web']],function()
{

Route::get('blog/{slug}',['as'=>'blog.single','uses'=>'Blogcontroller@getSingle'])->where('slug','[\w\d\-\_]+');	
Route::get('about', 'pagesController@getAbout');


Route::get('/', 'pagesController@getIndex');

Route::get('contact', 'pagesController@getContact');
Route::resource('posts', 'PostController');
});
