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


Route::get('/','BasicController@index')                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             ;
Route::get('about','BasicController@about');
Route::get('contact','BasicController@contact');
Route::get('gallery','BasicController@gallery');
Route::post('contact','BasicController@get_contact');

Route::get('blog','BlogController@blog');
Route::get('newblog','BlogController@new');
Route::post('newblog','BlogController@store');
Route::get('singleblog/{id}','BlogController@singleblog');
Route::get('blog/delete/{token}','BlogController@delete');
Route::get('blog/edit','BlogController@edit'); # Complete this one

Route::get('shop','ShopController@shop');

Route::get('class','ClassController@class');
Route::get('confirmpackage/{id}','ClassController@confirm_package');# Show according to seleted package
Route::post('confirmpackage/{id}','ClassController@package_purchase');
Route::post('packages','ClassController@paymentCallback');

Route::get('register','AccountController@register');
Route::post('register','AccountController@new_user');
Route::get('login','AccountController@login')->name('login');
Route::post('login','AccountController@loginaccess');
Route::get('logout','AccountController@logout');
Route::get('verify/{token}','AccountController@verify');
Route::get('account/delete/{token}','AccountController@delete');
Route::get('myaccount','AccountController@myaccount');



