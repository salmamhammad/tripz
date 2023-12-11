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

Route::get('/','App\Http\Controllers\HomeController@index')->name('/');


Route::get('/home', 'App\Http\Controllers\userController@home')->name('home');

Route::get('/about', 'App\Http\Controllers\HomeController@about')->name('about');
Route::get('/visa', 'App\Http\Controllers\userController@firststage')->name('visa');
Route::get('/contact', 'App\Http\Controllers\HomeController@contact')->name('contact');
Route::post('/contact/send', 'App\Http\Controllers\HomeController@sendcontact')->name('contact.send');
Route::post('/participant', 'App\Http\Controllers\userController@participant')->name('participant');
Route::post('/conditions', 'App\Http\Controllers\userController@conditions')->name('conditions');
Route::post('/submit', 'App\Http\Controllers\userController@submit')->name('submit');
Route::post('/demond', 'App\Http\Controllers\userController@demond')->name('demond');
Route::get('/country', 'App\Http\Controllers\userController@country')->name('country');
Route::get('/myorder', 'App\Http\Controllers\userController@myorder')->name('myorder');
Route::get('/finance', 'App\Http\Controllers\userController@finance')->name('finance');
Route::get('/hotels', 'App\Http\Controllers\userController@hotels')->name('hotels');
Route::get('/hotel/request', 'App\Http\Controllers\userController@hotel_request')->name('hotel_request');
Route::get('/hoteldemond/{id}', 'App\Http\Controllers\userController@hoteldemond')->name('hoteldemond');
Route::get('/deleteorder/{id}', 'App\Http\Controllers\userController@deleteorder')->name('deleteorder');

Route::post('/demondhotel', 'App\Http\Controllers\userController@demondhotel')->name('demondhotel');
Route::post('/demondhotelreq', 'App\Http\Controllers\userController@demondhotelreq')->name('demondhotelreq');
Route::get('/hotelinformation/{id}', 'App\Http\Controllers\userController@hotelinformation')->name('hotelinformation');

Route::get('/drivdemond', 'App\Http\Controllers\userController@drivdemond')->name('drivdemond');
Route::post('/demonddriv', 'App\Http\Controllers\userController@demonddriv')->name('demonddriv');


Route::get('/voyages/group', 'App\Http\Controllers\userController@voyagesgroup')->name('voyages.group');
Route::get('/voyages/single', 'App\Http\Controllers\userController@voyagessingle')->name('voyages.single');
Route::get('/travelemond/{id}', 'App\Http\Controllers\userController@travelemond')->name('travelemond');
Route::post('/demondtravel', 'App\Http\Controllers\userController@demondtravel')->name('demondtravel');
Route::post('/demondtravelinfor', 'App\Http\Controllers\userController@demondtravelinfor')->name('demondtravelinfor');
Route::post('/demondtravelfinition', 'App\Http\Controllers\userController@demondtravelfinition')->name('demondtravelfinition');


Route::get('/travelsingle/demond/{id}', 'App\Http\Controllers\userController@travelsingledemond')->name('travelsingle.demond');
Route::post('/singledemond/send', 'App\Http\Controllers\userController@singledemondsend')->name('singledemond.send');


Route::get('/flights', 'App\Http\Controllers\userController@flights')->name('flights');
Route::get('/flightdemond/{id}', 'App\Http\Controllers\userController@flightdemond')->name('flightdemond');
Route::post('/flightdemond/send', 'App\Http\Controllers\userController@flightdemondsend')->name('flightdemond.send');



Route::group(['prefix' => 'admin'], function () {
    
    Voyager::routes();
    Route::get('/changewallet', 'App\Http\Controllers\userController@changewallet')->name('changewallet');
    Route::get('/acceptedmond', 'App\Http\Controllers\userController@acceptedmond')->name('acceptedmond');
    Route::get('/rejetdmond', 'App\Http\Controllers\userController@rejetdmond')->name('rejetdmond');
    Route::get('/terminedmond', 'App\Http\Controllers\userController@terminedmond')->name('terminedmond');
    Route::post('/deposit', 'App\Http\Controllers\userController@deposit')->name('deposit');
    Route::post('/withdraw', 'App\Http\Controllers\userController@withdrawwww')->name('withdraw');
    Route::post('/emailsmyTestMail', 'App\Http\Controllers\userController@emailsmyTestMail')->name('emails.myTestMail');

    Route::get('/docreqssend/{id}', 'App\Http\Controllers\userController@docreqssend')->name('docreqssend');

    Route::get('/alldata/{id}', 'App\Http\Controllers\userController@alldata')->name('alldata');


});

Auth::routes();



