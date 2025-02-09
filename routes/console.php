<?php

use App\Models\Otp;
use Illuminate\Support\Facades\Schedule;

// Delete Otp is Exipred
Schedule::call(function () {
    Otp::where('expired_at', '<', now())->delete();
})->everyMinute();

