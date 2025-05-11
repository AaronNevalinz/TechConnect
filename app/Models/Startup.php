<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Startup extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'description', 
        'founder_id', 
        'industry',
        'logo'
    ];

    public function founder() {
        return $this->belongsTo(User::class, 'founder_id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
    public function teamMembers()
    {
        return $this->belongsToMany(User::class, 'startup_user');
    }
    public function fundingRounds()
    {
        return $this->hasMany(FundingRound::class);
    }
}

