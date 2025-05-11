<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $table = 'job_postings';

    protected $fillable = [
        'title',
        'description',
        'requirements',
        'location',
        'type',
        'salary_range',
        'startup_id',
        'status',
    ];

    public function startup()
    {
        return $this->belongsTo(Startup::class);
    }
} 