<?php

use Illuminate\Support\Facades\Route;

// 👉 new 
use App\Http\Controllers\Categories_controller;
// 👉 new

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

Route::get('/start', function () {
    return view('start');
});

// 👉 new 

Route::get('/formCategories', function () {
    return view('form_categories');
});

Route::post("/registerCategories",[Categories_controller::class,"insert"])->name("categories.insert");
Route::get("/listCategories",[Categories_controller::class,"show"])->name("categories.show");

// 👉 new 

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/', function () {
        return view('welcome');
    })->name('/');
});