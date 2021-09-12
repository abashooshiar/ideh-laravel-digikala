<?php

use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Route::prefix('admin')->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\AdminController::class, 'index']);
    Route::resource('category', App\Http\Controllers\Admin\CategoryController::class)->except(['show']);
    Route::post('category/remove_items', [App\Http\Controllers\Admin\CategoryController::class, 'remove_items']);
    Route::post('category/restore_items', [App\Http\Controllers\Admin\CategoryController::class, 'restore_items']);
    Route::post('category/{category}', [App\Http\Controllers\Admin\CategoryController::class, 'restore']);

});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
