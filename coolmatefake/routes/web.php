<?php

use App\Http\Controllers\Admin\MainAdminController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//Admin 

Route::prefix('admin')->group(function () {
    Route::get('/',[MainAdminController::class,'index'])->name('admin');
    Route::get('home',[MainAdminController::class,'index']);

  //order 
    Route::get('order/list',[MainController::class,'show_order']);
    Route::get('order/detail/{order_detail}',[MainController::class,'show_order_detail']);
    Route::get('order/delete',[MainController::class,'delete_order']);

});


//Admin-Product 
Route::get('/admin/product/add',[ProductController::class,'index']);
Route::get('/admin/product/list',[ProductController::class,'show']);
Route::post('/admin/product/add',[ProductController::class,'create']);
Route::get('/admin/product/delete',[ProductController::class,'delete']);
Route::get('/admin/product/edit/{id}',[ProductController::class,'edit']);
Route::post('/admin/product/edit/{id}',[ProductController::class,'update']);


//upload img 
Route::post('/upload/store',[ProductController::class,'storeimg']);
Route::post('/upload/stores',[ProductController::class,'storeimgs']);

//front-end 
Route::get('/',[MainController::class,'index']);
Route::get('/product/{id}-{slug}',[MainController::class,'show_product_detail']);
Route::get('/confirm_order/{id}',[MainController::class,'show_confirm_order']);
Route::get('/confirm_order_cus',[MainController::class,'confirm_order_cus'])-> name('confirm_order_cus');
Route::get('/confirm_order_success',[MainController::class,'confirm_order_success']);
Route::get('/confirm_order_fail',[MainController::class,'confirm_order_fail']);


//cart 

Route::post('/cart/add',[MainController::class,'add_cart']);
Route::get('/cart',[MainController::class,'show_cart']);
Route::get('/cart/delete/{id}',[MainController::class,'delete_cart']);
Route::post('/cart/update',[MainController::class,'update_cart']);
Route::post('/cart/send',[MainController::class,'send_cart']);

