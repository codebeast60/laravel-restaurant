<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/', [PagesController::class, 'index'])->name('home.index');
Route::get('/pages/index', [PagesController::class, 'index'])->name('home.index');
Route::get('/pages/about', [PagesController::class, 'about'])->name('home.about');
Route::get('/pages/items', [PagesController::class, 'items'])->name('home.items');
Route::resource('/admin', CategoryController::class);
Route::resource('/admin/category', CategoryController::class);
Route::resource('/admin/item', ItemCOntroller::class);




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
