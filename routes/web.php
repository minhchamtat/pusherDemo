<?php

use App\Events\formSubmit;
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

//pusher
Route::get('/counter', function () {
    return view('counter');
});

Route::get('/sender', function () {
    return view('sender');
});

Route::post('/sender', function () {
    $comment = request()->comment;
    $name = request()->name;
    event(new formSubmit($comment, $name));
    return redirect('/sender');
});

//tranformer
//(đã thêm bảng post và user. file liên quan: folder Transformer, app/post, app/controller/postcontroller)
Route::get('/tranformer', 'PostController@getPost'); 

//event
//(đã thêm bảng discounts, file liên quan: event/discountEvent.php, folder app/listeners, sửa file app/Providers/EventServiceProvider.php
Route::get('/event', function () {
    return view('event');
});

Route::post('/sendmail', 'EventController@postSend');

//rule: Giúp dev viết các hàm để check validate. nó được dùng lại nhiều lần (tranform)
//(đã thêm customValidateController )
Route::get('getCustom', 'CustomValidateControler@getCustom');
Route::post('postCustom', 'CustomValidateControler@postCustom');

//reactJs
//cần chạy thư viện npm install --save-dev @babel/plugin-proposal-class-properties
Route::get('/', function () {
    return view('welcome');
});
Route::resource('products', 'ProductController');

//multi auth
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin/dashboard','AdminController@index');
Route::get('admin','Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin','Admin\LoginController@login');
Route::post('admin-password/email','Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('admin-password/reset','Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('admin-password/reset','Admin\ResetPasswordController@reset');
Route::get('admin-password/reset/{token}','Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
