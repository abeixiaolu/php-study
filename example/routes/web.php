<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
Route::view('/contact', 'contact');

// Route::get('/jobs', [JobController::class, 'index']);
// Route::get('/jobs/create', [JobController::class, 'create']);
// Route::get('/jobs/{job}', [JobController::class, 'show']);
// Route::get('/jobs/{job}/edit', [JobController::class, 'edit']);
// Route::delete('/jobs/{job}', [JobController::class, 'destroy']);
// Route::patch('/jobs/{job}', [JobController::class, 'update']);
// Route::post('/jobs', [JobController::class, 'store']);

// Route::controller(JobController::class)->group(function () {
//     Route::get('/jobs', 'index');
//     Route::get('/jobs/create', 'create');
//     Route::get('/jobs/{job}', 'show');
//     Route::get('/jobs/{job}/edit', 'edit');
//     Route::delete('/jobs/{job}', 'destroy');
//     Route::patch('/jobs/{job}', 'update');
//     Route::post('/jobs', 'store');
// });

Route::resource('jobs', JobController::class);
