<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Frontend;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Mails;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserAdminController;


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

Route::get('/', function () {
    return view('frontend.pages.index');
});
Route::get('/detail', function (){
    return view('frontend.pages.detail');
});
Route::get('/shop', function (){
    return view('frontend.pages.shop');
});
Route::get('/feature/product', function (){
    return view('frontend.pages.featured');
});
Route::get('/contact', function (){
    return view('frontend.pages.contact');
});
Route::get('/auth/login',function (){
    return view('frontend.pages.user_login.login');
});
Route::get('/auth/register',function (){
    return view('frontend.pages.user_login.register');
});
Route::get('/product/detail/{slug}',[Frontend::class,'productDetail'])->name('product.detail');
Route::get('/product/discount/detail/{slug}',[Frontend::class,'productDiscount'])->name('product.discount.detail');
Route::get('/category/product/{name}',[Frontend::class,'categoryProduct'])->name('category.product');
// Backend Routes
Route::get('/admin/dashboard', function (){
    return view('backend.dashboard');
});
// Category Route
Route::get('/admin/dashboard/category/read',[CategoryController::class,'index'])->name('category.index');
Route::get('/admin/dashboard/category/create',[CategoryController::class,'create'])->name('category.create');
Route::post('/admin/dashboard/category/store',[CategoryController::class,'store'])->name('category.store');
Route::get('/admin/dashboard/category/delete/{id}',[CategoryController::class,'destroy'])->name('category.delete');
Route::get('/admin/dashboard/category/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
Route::post('/admin/dashboard/category/update/{id}',[CategoryController::class,'update'])->name('category.update');

// Product Route
Route::get('/admin/dashboard/product/read',[ProductController::class,'index'])->name('product.index');
Route::get('/admin/dashboard/product/create',[ProductController::class,'create'])->name('product.create');
Route::post('/admin/dashboard/product/store',[ProductController::class,'store'])->name('product.store');
Route::get('/admin/dashboard/product/delete/{id}',[ProductController::class,'destroy'])->name('product.delete');
Route::get('/admin/dashboard/product/edit/{id}',[ProductController::class,'edit'])->name('product.edit');
Route::post('/admin/dashboard/product/update/{id}',[ProductController::class,'update'])->name('product.update');

// Card Route
Route::get('/cart/store/{id}',[CartController::class,'store'])->name('cart.store');
Route::get('/cart/detail',[CartController::class,'index'])->name('cart.index');

// Login and register route
Route::get('/auth/admin/register',[AdminController::class,'registerPage'])->name('auth.register');
Route::get('/auth/admin/login',[AdminController::class,'loginPage'])->name('auth.login');

// Route for the contact  mail
Route::get('/contact/mail', function (){
    return view('email.test');
});
Route::post('/send/main',[Mails::class,'sendMail'])->name('send.mail');
