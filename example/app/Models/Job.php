<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job
{
  public static function all()
  {
    return [
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
  }

  public static function find($id)
  {
    $job = Arr::first(static::all(), fn($job) => $job['id'] == $id);
    if (!$job) {
      abort(404);
    }
    return $job;
  }
}
