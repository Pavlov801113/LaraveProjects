<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\DirectorController;
use App\Http\Controllers\LeadactorController;

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


Route::get('/', [MainController::class, 'index'])->name('main.index');
//movies
Route::get('/movies', [MovieController::class, 'index'])->name('movies.index');
Route::get('/movies/create', [MovieController::class, 'create'])->name('movies.create');
Route::post('/movies/create', [MovieController::class, 'store'])->name('movies.create');
Route::get('/movies/edit/{movie}', [MovieController::class, 'edit'])->name('movies.edit');
Route::post('/movies/edit/{movie}', [MovieController::class, 'update'])->name('movies.edit');
Route::post('/movies/delete/{movie}', [MovieController::class, 'destroy'])->name('movies.delete');
//directors
Route::get('/directors', [DirectorController::class, 'index'])->name('directors.index');
Route::get('directors/create', [DirectorController::class, 'create'])->name('directors.create');
Route::post('/directors/create', [DirectorController::class, 'store'])->name('dorectors.create');
Route::get('/directors/edit/{director}', [DirectorController::class, 'edit'])->name('directors.edit');
Route::post('/directors/edit/{director}', [DirectorController::class, 'update'])->name('directors.edit');

//leadactors
Route::get('/leadactors', [LeadactorController::class, 'index'])->name('leadactors.index');
Route::get('/leadactors/create', [LeadactorController::class, 'create'])->name('leadactors.create');
Route::post('/leadactors/create', [LeadactorController::class, 'store'])->name('leadactors.create');
Route::get('/leadactors/edit/{leadactor}', [LeadactorController::class, 'edit'])->name('leadactors.edit');
Route::post('/leadactors/edit/{leadactor}', [LeadactorController::class, 'update'])->name('leadactors.edit');
