<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;


Route::get('/apidata', [ApiController::class, 'getApiData'])->name('apidata');