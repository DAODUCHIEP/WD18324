<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StudentController;

// method http
// +Get , Post,put,Delete

//base url : http://127.0.0.1:8000


// Route::get('/test', function(){
//     echo 'Hello';
// });

Route::get('/', function(){
    echo 'Trang chu';
});

Route::get('thong-tin-sv',[StudentController::class,'showThongTinSv']);

// //list-product
// Route::get('list-product', [ProductController::class,'showProduct']);

// //slug http://127.0.0.1:8000/get-product/1
// Route::get('get-product/{id}', [ProductController::class,'getProduct']);

// //params http://127.0.0.1:8000/update-product?id=1&name=iphone
// Route::get('update-product', [ProductController::class,'updateProduct']);