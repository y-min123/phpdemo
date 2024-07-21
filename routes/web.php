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

Route::get('/home', function () {
    return 'home';
});

//路由群组
Route::group(['prefix' => '/home/test'],function () {
    Route::get('/test1', function () {
        return '访问/home/test/test1';
    });
    Route::get('/test2', function () {
        return '访问/home/test/test2';
    });

});

