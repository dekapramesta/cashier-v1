<?php

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
    return view('welcome');
})->name('first_home');

Auth::routes();



Route::middleware(['auth', 'CekLevel:1'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

Route::middleware(['auth', 'CekLevel:2'])->group(function () {
    Route::get('/home-slicing', [App\Http\Controllers\HomeController::class, 'slicingHome'])->name('home.slicing');
});
// Route::group(['middleware' => ['auth']], function () {

   
// });
