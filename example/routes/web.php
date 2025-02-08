<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs.index', [
        'jobs' => Job::with('employer')->latest()->simplePaginate((3))
    ]);
});

Route::get('/jobs/create', function () {
    return view('jobs.create');
});

Route::get('/jobs/{id}', function ($id) {
    return view('jobs.show', [
        'job' => Job::find($id)
    ]);
});

Route::get('/jobs/{id}/edit', function ($id) {
    return view('jobs.edit', [
        'job' => Job::find($id)
    ]);
});

Route::delete('/jobs/{id}', function ($id) {
    Job::find($id)->delete();
    return redirect('/jobs');
});

Route::patch('/jobs/{id}', function ($id) {
    $job = Job::find($id);
    request()->validate([
        'title' => ['required', 'min:3', 'max:255'],
        'salary' => ['required'],
        'description' => [],
    ]);
    $job->update([
        'title' => request('title'),
        'salary' => request('salary'),
        'description' => request('description'),
    ]);
    return redirect('/jobs/' . $id);
});


Route::post('/jobs', function () {
    request()->validate([
        'title' => ['required', 'min:3', 'max:255'],
        'salary' => ['required'],
    ]);
    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'description' => request('description'),
        'employer_id' => 1
    ]);
    return redirect('/jobs');
});

Route::get('/contact', function () {
    return view('contact');
});
