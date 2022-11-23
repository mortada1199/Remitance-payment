<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
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





Route::get('pay','App\Http\Controllers\Controller@payshow') -> name('payshow');
Route::post('storepayment','App\Http\Controllers\Controller@storepayment') -> name('storepayment');


Route::get('transfer','App\Http\Controllers\Controller@transfer') -> name('transfer');
Route::post('storetransfer','App\Http\Controllers\Controller@storetransfer') -> name('storetransfer');




Route::get('history','App\Http\Controllers\Controller@history') -> name('history');
Route::get('getahistory','App\Http\Controllers\Controller@getahistory') -> name('getahistory');


Route::get('contact','App\Http\Controllers\Controller@contact') -> name('contact');


Route::get('/','App\Http\Controllers\Controller@login') -> name('login');
Route::post('CreateLogin','App\Http\Controllers\Controller@CreateLogin') -> name('CreateLogin');


Route::get('register','App\Http\Controllers\Controller@register') -> name('register');
Route::post('saveregister','App\Http\Controllers\Controller@storeregister') -> name('saveregister');



Route::get('success','App\Http\Controllers\Controller@success') -> name('success');


Route::get('fail','App\Http\Controllers\Controller@fail') -> name('fail');


Route::get('addbenfic','App\Http\Controllers\Controller@addbenfic') -> name('addbenfic');
Route::post('savebenfic','App\Http\Controllers\Controller@storebenfic') -> name('savebenfic');


Route::get('showbenfic','App\Http\Controllers\Controller@showbenfic') -> name('showbenfic');


Route::get('editbenfic/{benfic_id}','App\Http\Controllers\Controller@editbenfic') -> name('editbenfic');

 Route::POST('updatebenfc/{benfic_id}','App\Http\Controllers\Controller@updatebenfc') ->name('updatebenfc');


 Route::get('deletebenfic/{benfic_id}','App\Http\Controllers\Controller@deletebenfic') ->name('deletebenfic');




 Route::get('paybal','App\Http\Controllers\Controller@paybal') -> name('paybal');

 Route::post('storepaybal','App\Http\Controllers\Controller@storepaybal') -> name('storepaybal');




