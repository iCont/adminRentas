<?php

use App\Http\Controllers\RenterController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/renters',[RenterController::class, 'index'])->name('renters.index');
Route::post('/renters',[RenterController::class,'store'])->name('renters.store');
Route::put('/renters/{renter}/edit',[RenterController::class,'update'])->name('renters.update');
Route::delete('/renters/{renter}',[RenterController::class, 'destroy'])->name('renters.destroy');

