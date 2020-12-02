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
Route::get('aboutus','BasicController@about');
Route::get('contact','BasicController@contact');
Route::get('gallery','BasicController@gallery');
Route::post('contact','BasicController@post_contact');

Route::get('query','ContactController@get_query');
Route::post('query','ContactController@post_query');

Route::get('blog','BlogController@blog');
Route::get('newblog','BlogController@new')->middleware('auth');
Route::post('newblog','BlogController@store');
Route::get('singleblog/{id}','BlogController@singleblog');
Route::post('singleblog/{id}','BlogController@comment_blog');
Route::get('blog/delete/{token}','BlogController@delete');
Route::get('blog/edit','BlogController@edit'); # Complete this one

Route::get('shop','ShopController@shop');

Route::get('class','ClassController@class')->middleware('auth');
// Route::get('confirmpackage/{id}','ClassController@confirm_package');# Show according to seleted package
Route::get('confirmpackage/{id}','ClassController@package_purchase');
Route::post('packages','ClassController@paymentCallback');

Route::get('register','AccountController@get_register');
Route::post('register','AccountController@post_register');
Route::get('login','AccountController@get_login')->name('login');
Route::post('login','AccountController@post_login');
Route::get('logout','AccountController@get_logout');
Route::get('verify/{token}','AccountController@verify');
Route::get('account/delete/{token}','AccountController@delete');
Route::get('myaccount','AccountController@get_myaccount')->middleware('auth');
Route::get('googlelogin','AccountController@google_redirect');
Route::get('githublogin','AccountController@github_redirect');
Route::get('twitterlogin','AccountController@twitter_redirect');

Route::get('googlestatus','AccountController@google_status');
Route::get('twitterstatus','AccountController@twitter_status');
Route::get('githubstatus','AccountController@github_status');



Route::get('admin/user','AdminController@admin_user');
Route::get('admin/delete/account/{id}','AdminController@admin_user_delete');
Route::get('admin/sentmail','AdminController@admin_sent_mail');


Route::get('adminlogin','AdminAccountController@get_adminLogin');
Route::post('adminlogin','AdminAccountController@post_adminLogin');
Route::get('admin','AdminController@get_adminIndex')->name('admin');
Route::get('adminmember','AdminController@get_adminMember');
Route::get('adminorder','AdminController@get_adminOrder');
Route::get('adminblog','AdminController@get_adminBlog');
Route::get('adminblog/delete/{id}','AdminController@admin_deleteblog');
Route::get('admincomment','AdminController@get_adminComment');
Route::get('admincomment/delete/{id}','AdminController@get_adminComment');


Route::get('vamswallet','AccountController@vams_wallet');
Route::post('vamswallet','AccountController@vams_wallet_update');
Route::post('status/wallet','AccountController@vams_wallet_update_status');



