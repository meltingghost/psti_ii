<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AssistController;
use App\Http\Controllers\PermissionController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', [HomeController::class, 'home'])->name('home');
Route::get('registro.index', [EmployeeController::class, 'index'])->name('registro');
Route::get('control.index', [AssistController::class, 'index'])->name('control');
Route::get('permisos.index', [PermissionController::class, 'index'])->name('permisos');
Route::get('reportes', [ReportController::class, 'reportes'])->name('reportes');

Route::resource('registro', EmployeeController::class);
Route::resource('control', AssistController::class);
Route::resource('permisos', PermissionController::class);
Auth::routes();
