<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/news', [HomeController::class, 'news'])->name('news');

Route::prefix('admin')->group(function (){
    Route::get('/home', [AdminController::class, 'index'])->name('adminHome');
    Route::post('/home', [AdminController::class, 'insertPage']);

    Route::get('/news', [AdminController::class, 'news'])->name('adminNews');
    Route::get('/news/add', [AdminController::class, 'addNews'])->name('adminAddNews');
    Route::post('/news/add', [AdminController::class, 'addNewsPost']);
});

