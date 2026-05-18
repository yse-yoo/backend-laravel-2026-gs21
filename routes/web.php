<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/product/{id}', function ($id) {
    // TODO: ここで商品IDを使用して、データベースから商品情報を取得するなどの処理を行うことができます。
    $message = "Product ID: {$id}";
    return view('product.show', ['message' => $message]);
});
