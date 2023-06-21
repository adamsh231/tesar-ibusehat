<?php

use App\Http\Controllers\BiodataController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\SubjektifController;
use App\Http\Controllers\ObjektifController;
use App\Http\Controllers\CheckupController;
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

//template

Route::get('/template', function () {
    return view('template');
});

//landing page
Route::get('/', function () {
    return view('utama');
});

//home
Route::get('/utama', function () {
    return view('utama');
});

//checkup page
Route::get('/jadwal_checkup', function () {
    return view('jadwal_checkup');
});

//jadwal page
Route::get('/jadwal', function () {
    return view('jadwal');
});

//maintance
Route::get('/maintance', function () {
    return view('maintance');
});

//about
Route::get('/about', function () {
    return view('about');
});

//pasien data
// Route::resource('/pasien', MenuController::class, 'pasien');


//biodata routes
Route::resource('biodata', BiodataController::class)->middleware('can:isAdmin');
Route::resource('biodata', BiodataController::class)->only('show')->middleware('can:isSemua');


//subjektif routes
Route::resource('subjektif', SubjektifController::class)->middleware('can:isAdmin');
Route::resource('subjektif', SubjektifController::class)->only('show')->middleware('can:isSemua');

//objektif routes
Route::resource('objektif', ObjektifController::class)->middleware('can:isAdmin');
Route::resource('objektif', ObjektifController::class)->only('show')->middleware('can:isSemua');

//checkup routes
Route::resource('checkup', CheckupController::class);

// Route::get('checkup/{id}', 'CheckupController@index');


Route::controller(SubjektifController::class)->group(function () {
    Route::get('/subjektif/create/{id}', 'create');
});


Route::controller(objektifController::class)->group(function () {
    Route::get('/objektif/create/{id}', 'create');
});

Route::controller(CheckupController::class)->group(function () {
    Route::get('/checkup/create/{id}', 'create');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get()