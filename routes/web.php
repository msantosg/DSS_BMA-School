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
Route::get('/', 'Auth\LoginController@showLoginForm')->name('showLogin')->middleware('guest');

Route::post('login', 'Auth\LoginController@login')->name('login');

Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::middleware(['auth'])->group(function()
{
    Route::get('home', 'HomeController@index')->name('home');

    Route::get('cycle', 'CycleSchoolController@index')->name('cycle');
    Route::get('cycle/create', 'CycleSchoolController@create')->name('cycle.create');
    Route::post('cycle/store', 'CycleSchoolController@store')->name('cycle.store');

    Route::get('school', 'SchoolController@index')->name('school');
}
);