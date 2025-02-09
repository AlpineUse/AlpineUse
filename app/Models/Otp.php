<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Otp extends Model
{
    protected $fillable = [
        'email',
        'otp',
        'session_id',
        'expires_at'
    ];

    public function setExpiresAtAttribute($value)
    {
        $this->attributes['expires_at'] = Carbon::parse($value)->addMinutes(10);
    }

    public function incrementAttempts()
    {
        $this->attempts++;
        $this->save();
    }
}
