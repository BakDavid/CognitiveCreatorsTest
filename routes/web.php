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
Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/home', 'HomeController@index')->name('home');

//Authentication
Route::get('/','LoginCheckAndRegisterController@login')->name('login');

Route::post('/loginCheck','LoginCheckAndRegisterController@loginCheck')->name('loginCheck');

Route::get('/register','LoginCheckAndRegisterController@register')->name('register');

Route::post('/registerPost','LoginCheckAndRegisterController@registerPost')->name('registerPost');

Route::get('/loginPassword','LoginCheckAndRegisterController@loginPassword')->name('loginPassword');

Route::post('/loginPasswordPost','LoginCheckAndRegisterController@loginPasswordPost')->name('loginPasswordPost');

Route::post('/logout','LoginCheckAndRegisterController@logout')->name('logout');
//Authentication end

//Products and cart
Route::get('/products', 'ProductController@products')->name('products');
//End of products and cart
