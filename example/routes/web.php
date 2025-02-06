<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    $jobs = [
        [
            'id' => 1,
            'title' => 'Software Engineer',
            'salary' => '$50,000 - $100,000',
            'description' => 'We are looking for a software engineer with 3 years of experience in PHP and Laravel.',
        ],
        [
            'id' => 2,
            'title' => 'Designer',
            'salary' => '$50,000 - $100,000',
            'description' => 'We are looking for a designer with 3 years of experience in Figma and Adobe XD.',
        ],
        [
            'id' => 3,
            'title' => 'Project Manager',
            'salary' => '$50,000 - $100,000',
            'description' => 'We are looking for a project manager with 3 years of experience in project management.',
        ]
    ];

    return view('jobs', [
        'jobs' => $jobs
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    $jobs = [
        [
            'id' => 1,
            'title' => 'Software Engineer',
            'salary' => '$50,000 - $100,000',
            'description' => 'We are looking for a software engineer with 3 years of experience in PHP and Laravel.',
        ],
        [
            'id' => 2,
            'title' => 'Designer',
            'salary' => '$50,000 - $100,000',
            'description' => 'We are looking for a designer with 3 years of experience in Figma and Adobe XD.',
        ],
        [
            'id' => 3,
            'title' => 'Project Manager',
            'salary' => '$50,000 - $100,000',
            'description' => 'We are looking for a project manager with 3 years of experience in project management.',
        ]
    ];

    $job = Arr::first($jobs, fn($job) => $job['id'] == $id);

    if (!$job) {
        abort(404);
    }

    return view('job', [
        'job' => $job
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});
