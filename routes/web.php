<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {

    Route::get('/dashboard',function(){return view('dashboard');})->name('dashboard');
    Route::get('/Role', [RoleController::class, 'show']);
    // Rutas de User
    Route::get('/Index/User', [UserController::class, 'index'])->name('User.index');
    Route::get('/Nuevo/User', [UserController::class, 'create'])->name('User.create');
    Route::post('/Guardar/User',[UserController::class, 'store'])->name('User.store');
    
});
