<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; 
use App\Http\Controllers\CategoryController; 
use App\Http\Controllers\UnitController; 

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'redirect']);
Route::get('/home', [HomeController::class, 'redirect']);
Route::get('/profile', [HomeController::class, 'profile'])->name('profile');

Route::get('/admin-logout', [HomeController::class, 'admin_logout'])->name('admin.logout');
Route::get('/user-logout', [HomeController::class, 'user_logout'])->name('user.logout');


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




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
