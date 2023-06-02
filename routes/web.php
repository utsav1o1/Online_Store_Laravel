<?php

use App\Http\Controllers\admin\AdminProductController;
use App\Http\Controllers\admin\AdminHomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\productController;
use Illuminate\Support\Facades\Auth;
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
//refactored code
// Route::get('/', function () {
//     $viewData=[];
//     $viewData['title']='Home Page - Online Store';
//     return view('home.index')->with("viewData",$viewData);
// });

Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::get('/about', [HomeController::class, 'about'])->name("home.about");

Route::get('/products', [productController::class, 'index'])->name('product.index');

Route::get('/products/{id}', [productController::class, 'show'])->name('product.show');


Route::get('/cart', [CartController::class,'index'])->name("cart.index");
Route::get('/cart/delete', [CartController::class,'delete'])->name("cart.delete");
Route::post('/cart/add/{id}', [CartController::class,'add'])->name("cart.add");

Route::middleware('auth')->group(function () {
    Route::get('/cart/purchase', [CartController::class,'purchase'])->name("cart.purchase");
    Route::get('/my-account/orders', [MyAccountController::class,'orders'])->name("myaccount.orders");
    });



Route::middleware('admin')->group(function () {
    Route::get('/admin/home', [AdminHomeController::class, 'index'])->name('admin.home.index');
    
    Route::get('/admin/product', [AdminProductController::class, 'index'])->name('admin.product.index');
    Route::post('/admin/product/store', [AdminProductController::class, 'store'])->name('admin.product.store');
    
    Route::delete('/admin/products/{id}/delete', [AdminProductController::class, 'delete'])->name("admin.product.delete");
    Route::get('/admin/products/{id}/edit', [AdminProductController::class,'edit'])->name("admin.product.edit");
    Route::put('/admin/products/{id}/update', [AdminProductController::class,'update'])->name("admin.product.update");
});
Auth::routes();

