<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/login', [LoginController::class, 'index']);

Route::prefix('posts')->group(function () {
    Route::get('/', [PostController::class, 'index'])
        ->name('post.list');
    Route::get('/featured', [PostController::class, 'featured'])
        ->name('post.featured');
    Route::get('/similar', [PostController::class, 'similar'])
        ->name('post.similar');
    Route::get('/filter', [PostController::class, 'filter'])
        ->name('post.filter');
    Route::get('/{id}', [PostController::class, 'show'])
        ->name('post.show');
});

Route::prefix('user')->group(function () {
    Route::get('/getBm', [UserController::class, 'getBm'])
        ->name('post.get-bookmark');
    Route::post('/addBm', [UserController::class, 'storeBm'])
        ->name('post.add-bookmark');
    Route::get('/deleteBm', [UserController::class, 'deleteBm'])
        ->name('post.delete-bookmark');
});
