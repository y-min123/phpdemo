<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\URL;
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


//控制器路由
Route::get('test2','TestController@test2');

Route::get('test3','TestController@test3');

Route::get('test4','TestController@test4');


//分目录控制器路由
Route::get('admin_test2','Admin\MyController@test2');

//DB 的增删改查
Route::get('add','TestController@add');
Route::get('delete','TestController@delete');
Route::get('mod','TestController@mod');
Route::get('select','TestController@select');

Route::get('test/{id}','TestController@test');

Route::get('signtest','TestController@signtest') ->name('sign');
