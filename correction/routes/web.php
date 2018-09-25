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

/*
 * Homepage route, displays a simple view
 */
Route::get('/', function () {
    return view('home');
})->name('home');

/*
 * Show statistics page
 */
Route::get('/statistics', 'StatisticsController@show')->name('statistics');
Route::get('/history', 'HistoryController@show')->name('history');

Route::resource('articles', 'ArticleController');
