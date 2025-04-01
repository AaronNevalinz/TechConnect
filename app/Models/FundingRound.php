<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FundingRound extends Model
{
    use HasFactory;

    protected $fillable = ['startup_id', 'round_type', 'amount'];

    public function startup() {
        return $this->belongsTo(Startup::class);
    }
}

