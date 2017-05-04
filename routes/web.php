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

Route::get('/', 'PagesController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/venues', 'VenuesController@index')->name('venues');
Route::post('/venues', 'VenuesController@store')->name('venues.store');
Route::get('/venues/create', 'VenuesController@create')->name('venues.create');
Route::get('/venues/sections', 'VenuesController@previewSections')->name('venues.preview.sections');
Route::get('/venues/show', 'VenuesController@show')->name('venues.show');



