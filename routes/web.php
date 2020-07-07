<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/', 'FrontendController@index');
Route::get('/details/{id}','FrontendController@details')->name('details');


//admin

Route::get('/backend','AdminController@index');
Route::get('/home','AdminController@index');
Route::get('/add/post','AdminController@add_post')->name('add_post');
Route::post('/add/post','AdminController@add_post_p');
Route::get('/all/post','AdminController@all_post')->name('post');
Route::get('/post/publish/{id}','AdminController@publish')->name('publish');
Route::get('/post/unpublish/{id}','AdminController@unpublish')->name('unpublish');
Route::get('/post/delete/{id}','AdminController@delete')->name('delete');
Route::get('/post/details/{id}','AdminController@post_details')->name('post_details');

