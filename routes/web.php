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
//INDEX
Route::get('/', 'PageController@index');
//LOGIN
Route::get('/login', 'PageController@login');
//REGISTER
Route::get('/register', 'PageController@register');


/* INVENTORY */

//PART MANAGE
Route::get('/part-management', 'PageController@partManage');
//HOT PART
Route::get('/hot-part-inventory', 'PageController@hotPart');