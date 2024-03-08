<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BlogsController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PublicBlogController;
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

Route::get('/', [PublicBlogController::class, 'index']);
Route::get('/blog', [PublicBlogController::class, 'detail']);

Route::get('/login', [AuthController::class, 'login']);
Route::get('/admin/dashboard', [AdminController::class, 'index']);

Route::get('/admin/blogs', [BlogsController::class, 'blogs']);
Route::get('/admin/blogs/create', [BlogsController::class, 'create_blog']);
Route::get('/admin/blogs/{slug}', [BlogsController::class, 'single_blog']);
Route::get('/admin/blogs/{slug}/edit', [BlogsController::class, 'edit_blog']);
Route::post('ckeditor/upload', [BlogsController::class, 'upload_images'])->name('ckeditor.upload');
Route::post('ckeditor/remove', [BlogsController::class, 'remove_images'])->name('ckeditor.remove');

Route::get('/admin/categories', [CategoryController::class, 'categories']);
Route::get('/admin/categories/create', [CategoryController::class, 'create_category']);
Route::get('/admin/categories/{slug}/edit', [CategoryController::class, 'edit_category']);
Route::get('/admin/categories', [CategoryController::class, 'categories']);
Route::get('/admin/categories/create', [CategoryController::class, 'create_category']);
Route::get('/admin/categories/{slug}/edit', [CategoryController::class, 'edit_category']);

