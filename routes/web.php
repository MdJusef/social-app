<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LikeController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
//    Route::get('/dashboard', function () {
//        return view('dashboard');
//    })->name('dashboard');
    Route::get('dashboard',[UserController::class,'index'])->name('dashboard');
    Route::post('new-post',[UserController::class,'savePost'])->name('new-post');

    Route::get('homepage',[HomeController::class,'index'])->name('homepage');

    Route::get('like',[LikeController::class,'likePost'])->name('like');
//    Route::post('posts/{post}',[LikeController::class,'unlikePost'])->name('unlike');

});
