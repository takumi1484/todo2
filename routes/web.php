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
 * Route::get('/', function () {
 * return view('welcome');
 * });
 */

Route::get('/ip', function () {
    return view('ip.index');
});

Route::get('/regtest', function () {
    return view('welcome');
});

Route::get('/todo', 'TodosController@getIndex');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/{any}', function () {
    return view('app');
})->where('any', '.*');