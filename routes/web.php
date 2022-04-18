<?php

use App\Http\Controllers\RegisterController;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Route;


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
    return view('pages.home');
})->name('home');

Route::get('register', function () {
    return view('pages.register');
})->name('register');

Route::get('login', function () {
    return view('pages.login');
})->name('login');

// Route::get('/productsAdmin', function () {
//     return view('admin.updateProduct');
// })->name('products.admin');

Route::get('/addproducts', function () {
    return view('admin.addProduct');
})->name('productsadd');

Route::get('/admin', function () {
    return view('admin.admin');
})->name('adminpage');

// Autentification
Route::post('submit', [RegisterController::class, 'register'])->name('submit');
Route::post('postLogin', [RegisterController::class, 'postLogin'])->name('post');  
Route::get('logout', [RegisterController::class, 'logout'])->name('logout');

// Admin panel
Route::post('/product', [RegisterController::class, 'addProduct'])->name('addProduct');
Route::get('/data', [RegisterController::class, 'getData'])->name('data');
Route::get('dashboard', [RegisterController::class, 'dashboard'])->name('dashboard'); 
Route::get('/update', [RegisterController::class, 'updateData'])->name('apdatedata');
