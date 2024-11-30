<?php

use App\Http\Controllers\MasterController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MasterController::class, 'index']);
Route::get('/export', [MasterController::class, 'export']);


Route::get('/invoice', fn() => view('invoice'));

Route::get('/api/{count}', [MasterController::class, 'api']);
