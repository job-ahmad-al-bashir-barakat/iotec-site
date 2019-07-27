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

Route::group([
    'namespace' => '\App\Http\Controllers',
],function () {
    Route::get('/', 'MainControler@home');
    Route::get('about-us', 'MainControler@aboutUs');
    Route::get('terms-and-conditions', 'MainControler@termsAndAgreements');
    Route::get('faq', 'MainControler@faq');
    Route::get('dev-feed','MainControler@devFeed');
    Route::get('blog','MainControler@blog');
});
