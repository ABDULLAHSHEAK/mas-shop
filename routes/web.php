<?php

use App\Http\Middleware\TokenAuthenticate;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PolicyController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FontendController;

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

Route::get('/by-category', [CategoryController::class, 'ByCategoryPage']);
Route::get('/by-brand', [CategoryController::class, 'ByBrandPage']);



Route::get('/',[FontendController::class,'index']);

// ----------- Brand Routes -----------
Route::get('/Brand',[BrandController::class,'BrandList'])->name('BrandList');

//------------- Category Routes-----------
Route::get('/CategoryList',[CategoryController::class,'CategoryList'])->name('CategoryList');

//------------- Policy Routes-----------
Route::get('/policy', [PolicyController::class, 'policy']);
Route::get('/PolicyByType/{type}',[PolicyController::class, 'PolicyByType'])->name('PolicyByType');

//------------- ProductListByCategory Routes-----------
Route::get('/ProductListByCategory/{id}',[ProductController::class, 'ProductListByCategory'])->name('ProductListByCategory');

//------------- ProductListByBrand Routes-----------
Route::get('/ProductListByBrand/{id}',[ProductController::class, 'ProductListByBrand'])->name('ProductListByBrand');

//------------- ProductListByRemark Routes-----------
Route::get('/ProductListByRemark/{remark}',[ProductController::class, 'ProductListByRemark'])->name('ProductListByRemark');


//------------- ProductListBySlider Routes-----------
Route::get('/ProductListBySlider',[ProductController::class, 'ProductListBySlider'])->name('ProductListBySlider');


//------------- ProductDetailsById Routes-----------
Route::get('/ProductDetailsById/{id}',[ProductController::class, 'ProductDetailsById'])->name('ProductDetailsById');


//------------- ProductDetailsByReview Routes-----------
Route::get('/ProductDetailsByReview/{product_id}',[ProductController::class, 'ProductDetailsByReview'])->name('ProductDetailsByReview');


// ============  User Login Route =============

Route::get('/UserLogin/{UserEmail}',[UserController::class, 'UserLogin'])->name('UserLogin');
Route::get('/VerifyLogin/{UserEmail}/{OTP}',[UserController::class, 'VerifyLogin'])->name('VerifyLogin');
Route::get('/Logout',[UserController::class, 'UserLogout'])->name('UserLogout');


// -------- User Profile ---------

Route::post('/CreateProfile', [ProfileController::class, 'CreateProfile'])->middleware([TokenAuthenticate::class]);
Route::get('/ReadProfile', [ProfileController::class, 'ReadProfile'])->middleware([TokenAuthenticate::class]);


// --------- Create Product Review --------------------------------

Route::post('/CreateProductReview', [ProductController::class, 'CreateProductReview'])->middleware([TokenAuthenticate::class]);

//--------- Product Wish -----------

Route::get('/ProductWishList', [ProductController::class, 'ProductWishList'])->middleware([TokenAuthenticate::class]);
Route::get('/CreateWishList/{product_id}', [ProductController::class, 'CreateWishList'])->middleware([TokenAuthenticate::class]);
Route::get('/RemoveWishList/{product_id}', [ProductController::class, 'RemoveWishList'])->middleware([TokenAuthenticate::class]);


// ------------- Products Cart --------------------------------

Route::post('/CreateCartList', [ProductController::class, 'CreateCartList'])->middleware([TokenAuthenticate::class]);
Route::get('/CartList', [ProductController::class, 'CartList'])->middleware([TokenAuthenticate::class]);
Route::get('/DeleteCartList/{product_id}', [ProductController::class, 'DeleteCartList'])->middleware([TokenAuthenticate::class]);


//-------------- Invoice and payment ------------------
Route::get("/InvoiceCreate", [InvoiceController::class, 'InvoiceCreate'])->middleware([TokenAuthenticate::class]);
Route::get("/InvoiceList", [InvoiceController::class, 'InvoiceList'])->middleware([TokenAuthenticate::class]);
Route::get("/InvoiceProductList/{invoice_id}", [InvoiceController::class, 'InvoiceProductList'])->middleware([TokenAuthenticate::class]);


// -------------------- payment ---------------
Route::post("/PaymentSuccess", [InvoiceController::class, 'PaymentSuccess']);
Route::post("/PaymentCancel", [InvoiceController::class, 'PaymentCancel']);
Route::post("/PaymentFail", [InvoiceController::class, 'PaymentFail']);
