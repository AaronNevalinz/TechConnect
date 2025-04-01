<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job_Ops extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'company_id',
        'location',
        'job_type',
        'salary',
        'application_deadline',
    ];

    public function company()
    {
        return $this->belongsTo(Startup::class, 'company_id');
    }
}
