<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoadController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\CreateController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/welcome-ossian', [LoadController::class, 'index']);
Route::get('/load', [LoadController::class, 'getApiExternal'])->name('load');

Route::get('/list', [ListController::class, 'index'])->name('list');

Route::get('/create', [CreateController::class, 'index'])->name('create');
