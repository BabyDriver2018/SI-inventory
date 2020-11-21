<?php

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

Route::get('/menu',[App\Http\Controllers\MenuController::class, 'index']);
Route::get('/menu/reservas',[App\Http\Controllers\MenuController::class, 'reservas']);
Route::get('/home',[App\Http\Controllers\HomeController::class, 'index']);
Route::post('/reservas',[App\Http\Controllers\MenuController::class, 'reservar']);
Route::post('/reservasmenu',[App\Http\Controllers\MenuController::class, 'reservar']);
Route::get('/menu/{id}',[App\Http\Controllers\MenuController::class, 'vermas']);
Route::get('/contactenos',[App\Http\Controllers\HomeController::class, 'contactenos']);


Route::get('/test',[App\Http\Controllers\HomeController::class, 'test']);