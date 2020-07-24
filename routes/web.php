<?php

use App\Http\Controllers\UsersController;
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

// Route::get('/', 'HomeController@index')->name('home');

//General user routes
Route::get('/users', 'UsersController@index')->name('user.home');
Route::get('/users/edit/{id}', 'UsersController@edit')->name('user.edit');
Route::get('/users/show/{id}', 'UsersController@show')->name('user.show');
Route::get('/users/create', 'UsersController@create')->name('user.create');
Route::post('/users/create', 'UsersController@store')->name('user.store');
Route::get('/users/update/{id}', 'UsersController@update')->name('user.update');
Route::get('/users/help', 'UsersController@help')->name('user.help');


//Admin routes
Route::get('/admin', 'AdminsController@index')->name('admin.home');
Route::get('/admin/edit/{id}', 'AdminsController@edit')->name('admin.edit');
Route::get('/admin/show/{id}', 'AdminsController@show')->name('admin.show');
Route::get('/admin/create', 'AdminsController@create')->name('admin.create');
Route::post('/admin/store', 'AdminsController@store')->name('admin.store');
Route::get('/admin/update/{id}', 'AdminsController@update')->name('admin.update');
Route::post('/status/create', 'AdminsController@status')->name('admin.status');
Route::delete('/admin/{user}', 'AdminsController@destroy')->name('admin.destroy');
