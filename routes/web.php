<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
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
    session('lang') == 'ar' ? App::setLocale('ar') : App::setLocale('en') ;
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
Route::get('/salon/demo1', function () {
    session('lang') == 'ar' ? App::setLocale('ar') : App::setLocale('en') ;
    return view('salon.demo1.index');
});
Route::get('/salon/demo1/about-us', function () {
    session('lang') == 'ar' ? App::setLocale('ar') : App::setLocale('en') ;
    return view('salon.demo1.aboutus');
});
Route::get('/salon/demo1/services', function () {
    session('lang') == 'ar' ? App::setLocale('ar') : App::setLocale('en') ;
    return view('salon.demo1.services');
});
Route::get('/salon/demo1/contact-us', function () {
    session('lang') == 'ar' ? App::setLocale('ar') : App::setLocale('en') ;
    return view('salon.demo1.contact');
});
Route::POST('/lang/{lang}/{target}',function($lang,$target){
    session([
        'lang' => $lang == 'en' ? 'ar' : 'en'
    ]);
    return redirect(base64_decode($target));
});

