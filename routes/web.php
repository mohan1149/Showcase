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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/food/demo1', function () {
    return view('food.demo1.index');
});
Route::get('/food/demo2', function () {
    return view('food.demo2.index');
});
Route::get('/hotel/demo1', function () {
    return view('hotel.demo1.index');
});
Route::get('/hotel/demo2', function () {
    return view('hotel.demo2.index');
});
