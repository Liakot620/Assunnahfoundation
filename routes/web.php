<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[HomeController::class,"index"])->name('/home');
Route::get('/about', [HomeController::class, "about"])->name('/about');
Route::get('/projects', [HomeController::class, "project"])->name('/projects');
Route::get('/ongoings', [HomeController::class, "ongoing"])->name('/ongoing');
Route::get('/garally', [HomeController::class, "garally"])->name('/garally');
Route::get('/video', [HomeController::class, "video"])->name('/video');
Route::get('/news', [HomeController::class, "news"])->name('/news');
Route::get('/contact', [HomeController::class, "contact"])->name('/contact');