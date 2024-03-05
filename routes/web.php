<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
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

Route::get('/', [BlogController::class, 'index']);
Route::get('/blog', [BlogController::class, 'detail']);

Route::get('/admin/dashboard', [AdminController::class, 'index']);
Route::get('/admin/blogs', [AdminController::class, 'blogs']);
Route::get('/admin/blogs/create', [AdminController::class, 'create']);
Route::get('/admin/blogs/{slug}', [AdminController::class, 'single']);
Route::get('/admin/blogs/{slug}/edit', [AdminController::class, 'edit']);

Route::post('ckeditor/upload', [AdminController::class, 'upload_images'])->name('ckeditor.upload');
Route::post('ckeditor/remove', [AdminController::class, 'remove_images'])->name('ckeditor.remove');
