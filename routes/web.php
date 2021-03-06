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

Route::get('/', 'HomeController@index');
Route::get('/services', 'ServiceController@index');
Route::get('/portfolios', 'PortfolioController@index');

Route::group(['middleware' => 'sidebar'], function () {
    Route::resource('/blog','ArticleController');
    Route::get('/archive','ArticleController@archive');
    Route::get('/search','SearchController@searchArticle')->name('search');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
