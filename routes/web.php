<?php

use App\Http\Controllers\BiodataController;
use App\Http\Controllers\SubjektifController;
use App\Http\Controllers\ObjektifController;
use Illuminate\Support\Facades\Route;


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
    return view('/auth/login');
});



Route::resource('biodata', BiodataController::class);
Route::resource('subjektif', SubjektifController::class);
Route::resource('objektif', ObjektifController::class);

Route::controller(SubjektifController::class)->group(function () {
    Route::get('/subjektif/create/{id}', 'create');
});

Route::controller(objektifController::class)->group(function () {
    Route::get('/objektif/create/{id}', 'create');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get()