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


Route::get('/', 'App\Http\Controllers\HomeController@index');
Route::get('/index-v2', 'App\Http\Controllers\HomeController@index_v2');
Route::get('/index-v3', 'App\Http\Controllers\HomeController@index_v3');
Route::get('/index-v4', 'App\Http\Controllers\HomeController@index_v4');
Route::get('/index-v5', 'App\Http\Controllers\HomeController@index_v5');
Route::get('/index-v6', 'App\Http\Controllers\HomeController@index_v6');
Route::get('/index-v7', 'App\Http\Controllers\HomeController@index_v7');
Route::get('/index-v8', 'App\Http\Controllers\HomeController@index_v8');
Route::get('/slider-typer-text', 'App\Http\Controllers\HomeController@slider_typer_text');
Route::get('/slider-scroll-text', 'App\Http\Controllers\HomeController@slider_scroll_text');
Route::get('/slider-rotate-text', 'App\Http\Controllers\HomeController@slider_rotate_text');
Route::get('/explore-v1', 'App\Http\Controllers\HomeController@explore_v1');
Route::get('/explore-v2', 'App\Http\Controllers\HomeController@explore_v2');
Route::get('/explore-v3', 'App\Http\Controllers\HomeController@explore_v3');
Route::get('/explore-v4', 'App\Http\Controllers\HomeController@explore_v4');
Route::get('/auctions', 'App\Http\Controllers\HomeController@auctions');
Route::get('/item-details-v1', 'App\Http\Controllers\HomeController@item_details_v1');
Route::get('/item-details-v2', 'App\Http\Controllers\HomeController@item_details_v2');
Route::get('/activity-v1', 'App\Http\Controllers\HomeController@activity_v1');
Route::get('/activity-v2', 'App\Http\Controllers\HomeController@activity_v2');
Route::get('/blog', 'App\Http\Controllers\HomeController@blog');
Route::get('/blog-details', 'App\Http\Controllers\HomeController@blog_details');
Route::get('/help-center', 'App\Http\Controllers\HomeController@help_center');
Route::get('/authors-v1', 'App\Http\Controllers\HomeController@authors_v1');
Route::get('/authors-v2', 'App\Http\Controllers\HomeController@authors_v2');
Route::get('/connect-wallet', 'App\Http\Controllers\HomeController@connect_wallet');
Route::get('/create-item', 'App\Http\Controllers\HomeController@create_item');
Route::get('/profile', 'App\Http\Controllers\HomeController@profile');
Route::get('/ranking', 'App\Http\Controllers\HomeController@ranking');
Route::get('/login', 'App\Http\Controllers\HomeController@login');
Route::get('/signup', 'App\Http\Controllers\HomeController@signup');
Route::get('/no-result', 'App\Http\Controllers\HomeController@no_result');
Route::get('/faq', 'App\Http\Controllers\HomeController@faq');
Route::get('/contact-v1', 'App\Http\Controllers\HomeController@contact_v1');
Route::get('/contact-v2', 'App\Http\Controllers\HomeController@contact_v2');
