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

Route::get('/', 'UserController@index');


Route::get('distributer' , 'DistributerController@index')->name('distributer');
Route::post('distributer' , 'DistributerController@store')->name('distributer.store');
Route::delete('distributer/{id}' , 'DistributerController@brisanje')->name('distributer.brisanje');
Route::get('distributer/{id}' , 'DistributerController@edit')->name('distributer.edit');
Route::patch('distributer/{id}' , 'DistributerController@izmjeni')->name('distributer.izmjeni');

Route::resource('artikli' , 'ArtiklController');



Route::get('admin', 'AdminController@index')->name('admin');


Route::get('prikaz/{id}' , 'DistributerController@prikaz')->name('prikaz');



Route::get('registracija' , 'AdminController@prikaziRegistraciju')->name('prikaziRegistraciju');
Route::post('registracija','AdminController@registracija')->name('registracija');

Route::get('logina' , 'AdminController@prikaziLogin')->name('prikaziLogina');
Route::post('logina' , 'AdminController@login')->name('logina');

Route::post('logouta' , 'AdminController@logouta')->name('logouta');