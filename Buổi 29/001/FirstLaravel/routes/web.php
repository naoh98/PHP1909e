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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/demo', function () {
    echo "demo1";
});

Route::get('/demo2', function () {
    return view("demo2");
});

Route::get("/demo3","Demo3Controller@index");

Route::get("/demo5","Demo5Controller@homepage");
Route::get("/demo5/contact","Demo5Controller@contact");
Route::get("/demo5/product","Demo5Controller@product");