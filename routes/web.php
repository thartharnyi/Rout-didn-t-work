<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Middleware\MustBeAdmin;
use App\Http\Middleware\MustBeAuthUser;
use Illuminate\Support\Facades\Route;


Route::middleware(MustBeAuthUser::class)->group(function () {
    Route::get('/', [BlogController::class, 'index']);

    Route::get('/blogs/{blog:slug}', [BlogController::class, 'show'])->name('blogs.show');

    Route::post('/logout', [LogoutController::class, 'destroy']);

    Route::post('/blogs/{blog:slug}', [CommentController::class, 'store']);

    Route::post('/blogs/{blog:slug}/handle-subscription', [SubscriptionController::class, 'toggle']);

    Route::delete('/comments/{comment}', [CommentController::class, 'destroy']);

    Route::get('/comments/{comment}/edit', [CommentController::class, 'edit']);

    Route::patch('/comments/{comment}/update', [CommentController::class, 'update']);
});

Route::middleware(MustBeAdmin::class)->group(function () {

    Route::get('/admin', [AdminController::class, 'index']);

    Route::get('/admin/blogs/create', [AdminController::class, 'create']);

    Route::post('/admin/blogs/store', [AdminController::class, 'store']);

    Route::delete('/admin/{blog}/delete', [AdminController::class, 'destroy']);

    Route::get('/admin/{blog}/edit', [AdminController::class, 'edit']);

    Route::patch('/admin/{blog}/update', [AdminController::class, 'update']);
});

Route::middleware('guest-user')->group(function () {

    Route::get('/register', [RegisterController::class, 'create']);

    Route::post('/register', [RegisterController::class, 'store']);

    Route::get('/login', [LoginController::class, 'create']);

    Route::post('/login', [LoginController::class, 'store']);
});