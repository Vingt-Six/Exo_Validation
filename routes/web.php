<?php

use App\Http\Controllers\BookController;
use App\Models\Book;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [BookController::class, 'index']);
Route::get('/create', [BookController::class, 'create'])->name('crea');
Route::post('/store', [BookController::class, 'store']);
Route::get('/edit/{id}', [BookController::class, 'edit']);
Route::put('/update/{id}', [BookController::class, 'update']);
Route::delete('/delete/{id}', [BookController::class, 'destroy']);