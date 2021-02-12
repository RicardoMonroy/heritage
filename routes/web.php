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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'LandingController@welcome')->name('welcome');
Route::get('/blog', 'LandingController@blog')->name('blog');

Auth::routes();


Route::group(['middleware' => 'auth'], function () {
    Route::resource('user', 'UserController');
    Route::resource('permissions', 'PermissionController');
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
    Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);

    Route::resource('slider', 'SliderController');
    Route::resource('about', 'AboutController');
    Route::resource('companies', 'CompaniesController');
    Route::resource('meetyous', 'MeetyouController');
    Route::resource('contact', 'ContactController');
});

