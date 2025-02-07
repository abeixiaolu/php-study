<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
  /** @use HasFactory<\Database\Factories\JobFactory> */
  use HasFactory;

  protected $table = 'job_listings';

  protected $fillable = ['title', 'salary', 'description', 'employer_id'];

  public function employer()
  {
    return $this->belongsTo(Employer::class);
  }
}

// Job::first()->employer;