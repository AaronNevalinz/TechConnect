<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FundingRound extends Model
{
    use HasFactory;

    protected $fillable = [
        'startup_id',
        'amount_raised',
        'target_amount',
        'status',
        'round_type',
        'start_date',
        'end_date'
    ];

    public function startup() {
        return $this->belongsTo(Startup::class);
    }
}

