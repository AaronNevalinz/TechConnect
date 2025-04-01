<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Startup extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'founder_id', 'industry'];

    public function founder() {
        return $this->belongsTo(User::class, 'founder_id');
    }
}

