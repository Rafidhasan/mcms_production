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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


//oder routes
Route::post('/userOrder/{user_id}', 'UserOrderController@store');


// User profile route
Route::post('/{user_id}', 'UserProfileController@update');
Route::get('/{user_id}', 'UserProfileController@index');


