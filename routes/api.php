<?php

use App\Http\Controllers\TableController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::get('/user/roles', [UserController::class, 'userRoles'])->name('api.users');
Route::get('/users', [UserController::class, 'users'])->name('api.users');

Route::post('/table/edit', [UserController::class, 'users'])->name('table.edit');
Route::post('/table/destroy', [UserController::class, 'users'])->name('table.destroy');

Route::get('/sandbox/qr/{table:uuid}', [TableController::class, 'downloadQr'])->middleware('auth.session');
