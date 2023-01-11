<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
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







Route::get('/',[UserController::class,'index'])->name('index');

Route::get('/introduce', function () {return view('users.Introduce');})->name('introduce');
Route::get('/Warranty_Policy', function () {return view('users.WarrantyPolicy');})->name('Warranty_Policy');
Route::get('/new_feed', function () {return view('users.NewFeed');})->name('new_feed');
Route::get('/installment',function(){return view('users.Installment');})->name('installment');

Route::prefix('')->group(function(){
    Route::get('/logout',[UserController::class,'logout']);
    Route::post('/register',[UserController::class,'register'])->name('register');
    Route::post('/login',[UserController::class,'login'])->name('login');
    Route::get('/login',function(){return view('users.Home');})->name('login');
});

//cập nhật user
Route::get('/user_/{id}', [UserController::class,'get_by_id'])->name('get_user_id');
///xóa user
Route::get('/user/{id}',[UserController::class,'delete'])->name('deleteUser');
///cập nhật user
Route::post('/user/{id}',[UserController::class,'update'])->name('updateUser');

Route::post('image',[UserController::class,'upload_image'])->name('upload_image');



Route::prefix('order')->group(function(){
    Route::get('/{product_id}',[OrderController::class,'insert'])->name('indexOrder');
   //cập nhật giỏ hàng
    Route::post('/{product_id}',[OrderController::class,'updateOrder'])->name('addOrder');

});
Route::get('/getShopping_Cart',[OrderController::class,'shopping_cart'])->name('getShopping_Cart')->middleware('auth');;


Route::prefix('profile')->group(function(){
    Route::get('/',[UserController::class,'profile'])->name('profile');
    Route::get('/change_password',[UserController::class,'change_password'])->name('change_password');

});

/***
 * admin
 * **/
Route::prefix('product')->group(function(){
    Route::get('/{id}',[ProductController::class,'get_by_id'])->name('get_by_id');
});

/***
 * lấy ra danh sách loại sản phẩm theo id
 * **/
Route::prefix('category')->group(function(){
    Route::get('/phone',[CategoryController::class,'getPhone'])->name('getPhone');
    Route::get('/ipad',[CategoryController::class,'getIpad'])->name('getIpad');
    Route::get('/airpods',[CategoryController::class,'getAirpods'])->name('getAirpods');
    Route::get('/accessories',[CategoryController::class,'getAccessories'])->name('getAccessories');
    Route::get('/SearchProduct', [CategoryController::class, 'searchProduct'])->name('SearchProduct');

});



/***
 * admin
 * **/
Route::prefix('admin')->group(function(){
    Route::get('/', [AdminController::class, 'index'])->name('adminHome');
    Route::get('/users', [AdminController::class, 'users'])->name('manageUser');
    Route::post('/register',[AdminController::class,'registerUser'])->name('registerUser');
    Route::get('/products', [AdminController::class, 'products'])->name('manageProduct');
    Route::get('/products/{id}', [AdminController::class, 'get_products_id'])->name('manageProductsbyID');
    Route::get('/product/{id}', [AdminController::class, 'get_product_id'])->name('get_product_id');
    ///cập nhật product
    Route::post('/product/{id}',[AdminController::class,'update'])->name('updateProduct');
    //thêm mới
    Route::post('/product',[AdminController::class,'insert'])->name('insertProduct');
    Route::get('/product_/{id}',[AdminController::class,'delete'])->name('deleteProduct');
    Route::get('/category', [AdminController::class, 'categorys'])->name('manageCategory');
    //tìm kiếm
    Route::get('admin/SearchProduct', [AdminController::class, 'searchproduct'])->name('searchProduct');
    Route::get('/SearchCustomer', [AdminController::class, 'searchcustomer'])->name('searchCustomer');
});
