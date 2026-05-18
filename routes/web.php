<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);

Route::get('/product/{id}', function ($id) {
    // TODO: ここで商品IDを使用して、データベースから商品情報を取得するなどの処理を行うことができます。
    $message = "Product ID: {$id}";
    return view('product.show', ['message' => $message]);
});
