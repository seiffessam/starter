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

Route::get('/', function () {
    return view('welcome');
});
//no parameter
Route::get('/test1', function () {
   return 'welcome';
});
//required parameter
Route::get('/show-number{id}', function ($id) {
    return $id;
}) ->name('a');
//optional parameter
Route::get('/show-string{id?}', function () {
    return 'welcome';
})->name('b');

Route::get('first','Admin\FirstController@showString');

Route::resource('news','NewsController');
Route::get('index','Front\UserController@getIndex');

Auth::routes(['verify' => true ]);

Route::get('/home', 'HomeController@index')->name('home') -> middleware('verified');
