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

Route::get('/register', function () {
    return view('pages.register');
})->name('register');

Route::get('/login', function () {
    return view('pages.login');
})->name('login');

Route::post('/submit', [RegisterController::class, 'addData'])->name('submit');
Route::post('/data', [RegisterController::class, 'getData'])->name('data');