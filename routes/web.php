<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group83017625b5ae7892c2f807cf703e2fac497cb491.php which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PagesController@home');

// Routes messages
Route::get('/createMessage', 'MessagesController@createMessage');
Route::get('/messages/{message}', 'MessagesController@show');
Route::post('/messages/create', 'MessagesController@create')
  ->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/blog', 'PagesController@blog');
Route::get('/{username}', 'UserController@show');


Route::group(['prefix' => 'admin'], function () {
  Route::resource('blog', 'BlogController');
  Route::resource('categories', 'CategoryController');
  Route::resource('posts', 'PostController');
});