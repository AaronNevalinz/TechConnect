<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function startups()
    {
        return $this->belongsToMany(Startup::class);
    }
}
