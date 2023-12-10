<?php

use App\Http\Controllers\AdminController\OrderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WebControllers\UserController;
use App\Http\Controllers\AdminController\AdminController;
use App\Http\Controllers\AdminController\CategoryController;
use App\Http\Controllers\AdminController\SizeController;
use App\Http\Controllers\AdminController\ColorController;
use App\Http\Controllers\SubscribeController;
use App\Http\Controllers\AdminController\PageController;
use App\Http\Controllers\WebControllers\PageController as WPageController;
use App\Http\Controllers\WebControllers\CartController;
use App\Http\Controllers\WebControllers\WishlistController;
use App\Http\Controllers\WebControllers\ShippingController;
use App\Http\Controllers\AdminController\ProductController;
use App\Http\Controllers\AdminController\HotdealController;
use App\Http\Controllers\AdminController\SettingController;
use App\Http\Controllers\WebControllers\AllproductController;
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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__ . '/auth.php';
// Route::post('/add_cart/{id}', [\App\Http\Controllers\WebControllers\CartController::class, 'add_cart']);
// Route::get('login', [UserController::class, 'login'])->name('user.index');
Route::get('/', [UserController::class, 'frontpage']);
Route::get('/home', [UserController::class, 'home']);

// Route::post('/subscribe-us', 'SubscribeController@subscribe')->name('subscribe.us');
// Route::post('/check-subscribe-mail', 'SubscribeController@checkMail')->name('subscribe.check');
Route::post('/subscribe-us', [SubscribeController::class, 'subscribe'])->name('subscribe.us');
Route::post('/check-subscribe-mail', [SubscribeController::class, 'checkMail'])->name('subscribe.check');
Route::get('/page', [PageController::class, 'index'])->name('page');

//Admin
Route::get('/backend-admin', [AdminController::class, 'form']);
Route::post('/backend-check', [AdminController::class, 'login']);
// Route::get('/dashboard', [AdminController::class, 'dashboard']);
Route::get('/subscribe', [AdminController::class, 'subscribe']);
Route::post('/delete_subscribe/{id}', [AdminController::class, 'subs_delete']);
//category...
Route::get('/category', [CategoryController::class, 'create']);
Route::post('/store-category', [CategoryController::class, 'store']);
Route::get('/all-category', [CategoryController::class, 'index']);
Route::get('/edit-category/{id}', [CategoryController::class, 'edit']);
Route::post('/update-category/{id}', [CategoryController::class, 'update']);
Route::post('/delete-category/{id}', [CategoryController::class, 'destroy']);
//Size-admin
Route::get('/size', [SizeController::class, 'create']);
Route::post('/store-size', [SizeController::class, 'store']);
Route::get('/all-size', [SizeController::class, 'index']);
Route::get('/edit-size/{id}', [SizeController::class, 'edit']);
Route::post('/update-size/{id}', [SizeController::class, 'update']);
Route::post('/delete-size/{id}', [SizeController::class, 'destroy']);
//Color-admin
Route::get('/color', [ColorController::class, 'create']);
Route::post('/store-color', [ColorController::class, 'store']);
Route::get('/all-color', [ColorController::class, 'index'])->name('admin.color');
Route::get('/edit-color/{id}', [ColorController::class, 'edit']);
Route::post('/update-color/{id}', [ColorController::class, 'update']);
Route::post('/delete-color/{id}', [ColorController::class, 'destroy']);
//product-admin
Route::get('/product', [ProductController::class, 'create']);
Route::post('/store-product', [ProductController::class, 'store']);
Route::get('/all-product', [ProductController::class, 'index']);
Route::post('/tog-stts', [ProductController::class, 'chng_stts'])->name('status');
Route::post('/tog-deals', [ProductController::class, 'chng_deals'])->name('deals');
Route::get('/edit-product/{id}', [ProductController::class, 'edit']);
Route::post('/update-product/{id}', [ProductController::class, 'update']);
Route::post('/delete-product/{id}', [ProductController::class, 'destroy']);
//admin page
Route::get('/create-page', [PageController::class, 'create_page']);
Route::post('/store-page', [PageController::class, 'store_page']);
Route::get('/all-page', [PageController::class, 'index_page'])->name('admin.page');
Route::get('/edit-page/{id}', [PageController::class, 'edit_page']);
Route::post('/update-page/{id}', [PageController::class, 'update_page']);
Route::post('/delete-page/{id}', [PageController::class, 'destroy_page']);
Route::get('/pages/{pageSlug}', [WPageController::class, 'findPageBySlug']);
//
//shipping
//hotdeal-admin
Route::get('/hot_deal', [HotdealController::class, 'create']);
Route::post('/store-hot_deal', [HotdealController::class, 'store']);
Route::get('/all-hot_deal', [HotdealController::class, 'index'])->name('admin.hotdeal');
Route::get('/edit-hot_deal/{id}', [HotdealController::class, 'edit']);
Route::post('/update-hot_deal/{id}', [HotdealController::class, 'update']);
Route::post('/delete-hot_deal/{id}', [HotdealController::class, 'destroy']);
//order admin
Route::get('/orders', [OrderController::class, 'index'])->name('list');
//admin setting
Route::get('/all-setting', [SettingController::class, 'index'])->name('admin.setting');
Route::post('/update-setting', [SettingController::class, 'update'])->name('admin.update.setting');

Route::get('/order-synced/{id}', [OrderController::class, 'sync']);
Route::get('/order-update/{id}', [OrderController::class, 'update']);
Route::get('/order-remove/{id}', [OrderController::class, 'cancel']);

// Route::get('/logout', [AdminController::class, 'logout']);

//hot deal
// Route::resource('/hot_deal', HotdealController::class);
//Category-admin
// Route::post('/order', [OrderController::class, 'index'])->name('order');

//Frontend



Route::get('/logout', [AdminController::class, 'logout']);
// Route::get('/search-product/{name}', [AllproductController::class, 'search_ranges'])->name('search');


//frontend
Route::group(['middleware' => 'auth'], function () {

    Route::post('/wishlist/{id}', [WishlistController::class, 'add_wishlist']);
    Route::get('/all-wishlist', [WishlistController::class, 'all_wishlist']);
    Route::get('/delete-wishlist/{id}', [\App\Http\Controllers\WebControllers\WishlistController::class, 'destroy']);


    Route::post('/add_cart/{id}', [\App\Http\Controllers\WebControllers\CartController::class, 'add_cart']);
    Route::get('/hotdeal_shop/{name}', [\App\Http\Controllers\UserController::class, 'hotdeal']);

    Route::get('/delete_cart/{id}', [\App\Http\Controllers\WebControllers\CartController::class, 'delete_cart']);

    Route::get('/shipping-address', [ShippingController::class, 'form']);
    Route::get('/view-cart', [CartController::class, 'view_cart']);
    Route::post('/shipping-store', [ShippingController::class, 'ship_store']);

    Route::get('/account-dashboard', [\App\Http\Controllers\WebControllers\ProfileController::class, 'dashboard']);
    Route::post('/profile-update', [\App\Http\Controllers\WebControllers\ProfileController::class, 'profile_update']);
    Route::get('/profile', [\App\Http\Controllers\WebControllers\ProfileController::class, 'index']);
    Route::get('/billing-address', [\App\Http\Controllers\WebControllers\ProfileController::class, 'bill_add']);
    Route::post('/billing-address-update', [\App\Http\Controllers\WebControllers\ProfileController::class, 'billaddress_update']);
    Route::get('/all-orders', [\App\Http\Controllers\WebControllers\ProfileController::class, 'orders']);
    Route::get('/order-cancel/{id}', [OrderController::class, 'cancelbyuser']);

    Route::get('/checkout', [OrderController::class, 'user_all_order']);
    Route::get('/cod-order', [OrderController::class, 'cod_order']);

    Route::get('/order-placed', [OrderController::class, 'order_placed']);
});
Route::get('/carts', [CartController::class, 'carts']);
Route::get('/productbycat/{name}', [AllproductController::class, 'productbycat'])->name('hello');
Route::get('/product-details/{id}', [\App\Http\Controllers\WebControllers\ProductdetailsController::class, 'viewdetails']);
Route::get('/shop', [AllproductController::class, 'shop']);

// Route::group(['middleware' => 'admin'], function () {
Route::get('/dashboard', [AdminController::class, 'dashboard']);
// });
//   Route::get('/dashboard', [AdminController::class, 'dashboard']);
