<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KursusController;
use App\Http\Controllers\MateriController;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('kursus', [KursusController::class, 'index']);
Route::get('kursus/create', [KursusController::class, 'create']);
Route::post('kursus', [KursusController::class, 'store']);
Route::get('kursus/{kursus}', [KursusController::class, 'show']);
Route::get('kursus/{kursus}/edit', [KursusController::class, 'edit']);
Route::put('kursus/{kursus}', [KursusController::class, 'update']);
Route::delete('kursus/{kursus}', [KursusController::class, 'destroy']);


Route::get('kursusmateri/{kursus}', [MateriController::class, 'index']);
Route::post('materi/store', [MateriController::class, 'store']);
Route::get('materi/{materi}', [MateriController::class, 'show']);
Route::get('materi/{materi}/edit', [MateriController::class, 'edit']);
Route::put('materi/{materi}', [MateriController::class, 'update']);
Route::delete('materi/{materi}', [MateriController::class, 'destroy']);
