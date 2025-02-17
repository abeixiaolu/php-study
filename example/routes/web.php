<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use App\Jobs\TranslateJob;
use Illuminate\Support\Facades\Route;

Route::get('/test', function () {
  TranslateJob::dispatch();
  return 'done';
});
Route::view('/', 'home');
Route::view('/contact', 'contact');
// Route::resource('jobs', JobController::class);

Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);
Route::get('/login', [SessionController::class, 'create']);
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);

Route::get('/jobs', [JobController::class, 'index']);
Route::get('/jobs/create', [JobController::class, 'create'])->middleware('auth');
Route::get('/jobs/{job}', [JobController::class, 'show']);
Route::get('/jobs/{job}/edit', [JobController::class, 'edit'])->middleware('auth')->can('edit', 'job');
Route::delete('/jobs/{job}', [JobController::class, 'destroy'])->middleware('auth');
Route::patch('/jobs/{job}', [JobController::class, 'update'])->middleware('auth');
Route::post('/jobs', [JobController::class, 'store'])->middleware('auth');

// Route::controller(JobController::class)->group(function () {
//     Route::get('/jobs', 'index');
//     Route::get('/jobs/create', 'create');
//     Route::get('/jobs/{job}', 'show');
//     Route::get('/jobs/{job}/edit', 'edit');
//     Route::delete('/jobs/{job}', 'destroy');
//     Route::patch('/jobs/{job}', 'update');
//     Route::post('/jobs', 'store');
// });
