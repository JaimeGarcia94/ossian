<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoadController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\CreateController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\EditController;

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
Route::post('/upload-image', [CreateController::class, 'create'])->name('create.image');

Route::get('/detail/{id}', [DetailController::class, 'detail'])->name('detail');

Route::get('/edit/{id}', [EditController::class, 'edit'])->name('edit');
Route::post('/update', [EditController::class, 'update'])->name('update');


