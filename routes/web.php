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
Route::get('/', function () {
    return view('event');
});

Route::post('/sendmail', 'EventController@postSend');

//rule: Giúp dev viết các hàm để check validate. nó được dùng lại nhiều lần
//(đã thêm customValidateController )
Route::get('getCustom', 'CustomValidateControler@getCustom');
Route::post('postCustom', 'CustomValidateControler@postCustom');
