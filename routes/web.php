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

Route::get('/', 'ArticleController@index')->name('article');
Route::post('/', 'ArticleController@store')->name('article.store');
Route::get('/list', 'ArticleController@show')->name('article.show');

Route::group([
     'prefix' => 'laravel-filemanager',
     // 'middleware' => ['web', 'auth']
], function () {
     \UniSharp\Laravelfilemanager\Lfm::routes(); 
});

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



