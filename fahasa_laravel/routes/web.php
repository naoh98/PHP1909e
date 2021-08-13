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
//route hiển thị fahasa web
Route::get('/','Frontend\IndexController@index');
//hiển thị sản phẩm từng danh mục
Route::get('/shop-category/{id}', 'Frontend\CategoryProductController@index');
//
Route::get('/new-category/{id}', 'Frontend\CategoryBlogController@index');




/**
 * Route cho administrator
 */
Route::prefix('admin')->group(function() {
    // Gom nhóm các route cho phần admin

    Route::get('/', 'Backend\DashboardController@index');
    //route hiển thị category
    Route::get('/product_category', 'Backend\CategoryProductController@index');
    Route::get('/product_category/create', 'Backend\CategoryProductController@createpage');
    Route::get('/product_category/edit/{category_id}', 'Backend\CategoryProductController@editpage');
    Route::get('/product_category/delete/{category_id}', 'Backend\CategoryProductController@delpage');
    //route hiển thị product
    Route::get('/product', 'Backend\ProductController@index');
    Route::get('/product/create', 'Backend\ProductController@createpage');
    Route::get('/product/edit/{book_id}', 'Backend\ProductController@editpage');
    Route::get('/product/delete/{book_id}', 'Backend\ProductController@delpage');

    //route chức năng category
    Route::post('/product_category/create', 'Backend\CategoryProductController@create');
    Route::post('/product_category/edit/{category_id}', 'Backend\CategoryProductController@edit');
    Route::post('/product_category/delete/{category_id}', 'Backend\CategoryProductController@delete');
    //route chức năng product
    Route::post('/product/create', 'Backend\ProductController@create');
    Route::post('/product/edit/{book_id}', 'Backend\ProductController@edit');
    Route::post('/product/delete/{book_id}', 'Backend\ProductController@delete');
});
