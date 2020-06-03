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

//4 route hiển thị view
//đối với sửa và xóa thì cần có id cụ thể, nên đưa {id} sau edit hoặc delete
Route::get("/backend/index","Backend\BooksController@index");
Route::get("/backend/create","Backend\BooksController@create");
Route::get("/backend/edit/{id}","Backend\BooksController@edit");
Route::get("/backend/delete/{id}","Backend\BooksController@delete");

//route hiển thị view cho Template Sb admin2
Route::get("/Template/index","Backend\TemplateController@index");
Route::get("/Template/login","Backend\TemplateController@login");
Route::get("/Template/register","Backend\TemplateController@register");
Route::get("/Template/logout","Backend\TemplateController@logout");
Route::get("/Template/management","Backend\TemplateController@management");
Route::get("/Template/manage_delete/{category_id}","Backend\TemplateController@delpage");
Route::get("/Template/manage_update/{category_id}","Backend\TemplateController@updpage");
Route::get("/Template/manage_create","Backend\TemplateController@crepage");
//route thao tác login & logout Sb admin 2
Route::post("/Template/login","Backend\TemplateController@logintask");
Route::post("/Template/register","Backend\TemplateController@registertask");
//route thao tác thêm sửa xóa cho Sb admin2
Route::post("/Template/manage_delete/{category_id}","Backend\TemplateController@delete");
Route::post("/Template/manage_update/{category_id}","Backend\TemplateController@update");
Route::post("/Template/manage_create","Backend\TemplateController@create");

//3 route xử lý dữ liệu
//đối với sửa và xóa thì cần có id cụ thể, nên đưa {id} sau edit hoặc delete
Route::post("/backend/create","Backend\BooksController@store");
Route::post("/backend/edit/{id}","Backend\BooksController@update");
Route::post("/backend/delete/{id}","Backend\BooksController@destroy");


Route::get("/db/{action?}","Backend\LearndbController@index");
Route::get("/orm/{action?}","Backend\LearnormController@index");