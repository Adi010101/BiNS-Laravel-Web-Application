<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecordController;

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


Route::get('/', [RecordController::class, 'index']);
Route::get('showrecord', [RecordController::class, 'records']);
Route::get('addrecord', [RecordController::class, 'create']);
Route::post('addrecord', [RecordController::class, 'store']);
Route::get('edit/{id}', [RecordController::class, 'edit']);
Route::put('update/{id}', [RecordController::class, 'update']);
Route::get('delete/{id}', [RecordController::class, 'destroy']);

