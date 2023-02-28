<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; 
use App\Http\Controllers\CategoryController; 
use App\Http\Controllers\UnitController; 
use App\Http\Controllers\SizeController; 
use App\Http\Controllers\ColorController; 
use App\Http\Controllers\ProductController; 
use App\Http\Controllers\AllProductController; 
use App\Http\Controllers\ContactController; 
use App\Http\Controllers\AboutController; 
use App\Http\Controllers\CartController; 
use App\Http\Controllers\ShippingController; 


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'redirect']);
Route::get('/home', [HomeController::class, 'redirect']);
Route::get('/profile', [HomeController::class, 'profile'])->name('profile');

Route::get('/admin-logout', [HomeController::class, 'admin_logout'])->name('admin.logout');
Route::get('/user-logout', [HomeController::class, 'user_logout'])->name('user.logout');

//Admin Panel
Route::get('/add-category', [CategoryController::class, 'create']);
Route::post('/store-category', [CategoryController::class, 'store']);
Route::get('/all-category', [CategoryController::class, 'index']);
Route::get('/edit-category/{id}', [CategoryController::class, 'edit']);
Route::post('/update-category/{id}', [CategoryController::class, 'update']);
Route::post('/delete-category/{id}', [CategoryController::class, 'destroy']);


Route::get('/add-unit', [UnitController::class, 'create']);
Route::post('/store-unit', [UnitController::class, 'store']);
Route::get('/all-unit', [UnitController::class, 'index']);
Route::get('/edit-unit/{id}', [UnitController::class, 'edit']);
Route::post('/update-unit/{id}', [UnitController::class, 'update']);
Route::post('/delete-unit/{id}', [UnitController::class, 'destroy']);


Route::get('/add-size', [SizeController::class, 'create']);
Route::post('/store-size', [SizeController::class, 'store']);
Route::get('/all-size', [SizeController::class, 'index']);
Route::get('/edit-size/{id}', [SizeController::class, 'edit']);
Route::post('/update-size/{id}', [SizeController::class, 'update']);
Route::post('/delete-size/{id}', [SizeController::class, 'destroy']);

Route::get('/add-color', [ColorController::class, 'create']);
Route::post('/store-color', [ColorController::class, 'store']);
Route::get('/all-color', [ColorController::class, 'index']);
Route::get('/edit-color/{id}', [ColorController::class, 'edit']);
Route::post('/update-color/{id}', [ColorController::class, 'update']);
Route::post('/delete-color/{id}', [ColorController::class, 'destroy']);

Route::get('/add-product', [ProductController::class, 'create']);
Route::post('/store-product', [ProductController::class, 'store']);
Route::get('/all-product', [ProductController::class, 'index']);
Route::get('/edit-product/{id}', [ProductController::class, 'edit']);
Route::post('/update-product/{id}', [ProductController::class, 'update']);
Route::post('/delete-product/{id}', [ProductController::class, 'destroy']);
Route::get('/product-status{product}',[ProductController::class,'change_status']);

//Frontend
Route::get('/productbycat/{name}', [AllProductController::class, 'productbycat']);
Route::get('/allproducts', [AllProductController::class, 'allproducts']);
Route::get('/view-details/{id}', [AllProductController::class, 'viewdetails']);
Route::get('/contact-us', [ContactController::class, 'contact']);
Route::get('/about', [AboutController::class, 'about']);



//cart
Route::post('/add-cart/{id}', [CartController::class, 'cart_store']);
Route::post('/remove-cart/{id}', [CartController::class, 'remove_cart']);

//shiping
Route::get('/shipping-address', [ShippingController::class, 'shipping_form']);
Route::post('/store-shipping', [ShippingController::class, 'ship_store']);




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
