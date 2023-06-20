<?php

use App\Http\Controllers\BiodataController;
use App\Http\Controllers\MenuController;
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
    return view('utama');
});

Route::get('/landing', function () {
    return view('utama');
});

//pasien data
// Route::resource('/pasien', MenuController::class, 'pasien');


//biodata routes
Route::resource('biodata', BiodataController::class)->middleware('can:isAdmin');
Route::resource('biodata', BiodataController::class)->only('show')->middleware('can:isPengurus');


//subjektif routes
Route::resource('subjektif', SubjektifController::class)->middleware('can:isAdmin');
Route::resource('subjektif', SubjektifController::class)->only('show')->middleware('can:isPengurus');

//objektif routes
Route::resource('objektif', ObjektifController::class)->middleware('can:isAdmin');
Route::resource('objektif', ObjektifController::class)->only('show')->middleware('can:isPengurus');

Route::controller(SubjektifController::class)->group(function () {
    Route::get('/subjektif/create/{id}', 'create');
});


Route::controller(objektifController::class)->group(function () {
    Route::get('/objektif/create/{id}', 'create');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get()