<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.index');
})->name('dashboard');

//user logout
Route::get('user/logout', [AdminController::class, 'logout'])->name('user.logout');

//for header part route
Route::get('header/part', [AdminController::class, 'headerPart'])->name('header.part');
Route::post('update/header/{id}', [AdminController::class, 'updateHeader']);

//Slider Route
Route::get('slider/options/', [AdminController::class, 'allSlider'])->name('slider');
Route::get('add/Slider', [AdminController::class, 'addSlider'])->name('add.slider');
Route::post('store/slider', [AdminController::class, 'storeSlider'])->name('store.slider');
Route::get('edit/slider/{id}', [AdminController::class, 'editSlider']);
Route::post('update/slider/{id}', [AdminController::class, 'updateSlider']);
Route::get('delete/slider/{id}', [AdminController::class, 'deleteSlider']);
