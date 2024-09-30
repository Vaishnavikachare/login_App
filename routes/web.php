<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Dashboard;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;


Route::get('/apidata', [ApiController::class, 'getApiData'])->name('apidata');

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard/{parent_user_id}', [Dashboard::class, 'userlist'])
    ->middleware(['auth', 'verified'])
    ->name('userlist');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/create_user', [ProfileController::class, 'create_user'])->name('create_user');
    Route::post('/create_user', [ProfileController::class, 'storeSubUser'])->name('store_sub_user');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/apidata', [ApiController::class, 'getApiData'])->name('apidata');
});



require __DIR__.'/auth.php';

