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


use App\Http\Controllers\EmployeeController;

Route::get('/', [EmployeeController::class, 'index']);
Route::get('/employees/create', [EmployeeController::class, 'create'])->middleware('auth');
Route::get('/employees/{id}', [EmployeeController::class, 'show']);
Route::post('/employees', [EmployeeController::class, 'store']);
Route::delete('/employees/{id}', [EmployeeController::class, 'destroy'])->middleware('auth');
Route::get('employees/edit/{id}',[EmployeeController::class, 'edit'])->middleware('auth');
Route::put('/employees/update/{id}', [EmployeeController::class, 'update'])->middleware('auth');




Route::get('/dashboard', [EmployeeController::class, 'dashboard'])->middleware('auth');

Route::post('/employees/join/{id}', [EmployeeController::class,'joinEvent'])->middleware();

Route::delete('/employees/leave/{id}', [EmployeeController::class,'leaveEvent'])->middleware();