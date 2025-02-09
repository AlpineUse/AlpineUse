<?php

namespace App\Livewire\Pages\Auth\Pages;

use App\Models\Otp;
use App\Notifications\Auth\OtpNotification;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\RateLimiter;
use Livewire\Component;

class Index extends Component
{
    public $email;
    public $otp;

    public function submit()
    {
        // Validates
        $this->validate([
            'email' => 'required|email',
        ]);

        // RateLimiter
        if (!RateLimiter::attempt('otp-request:' . $this->email, 1, function () {}, 60)) {
            $this->addError('email', 'Too many requests. Please wait 1 minute before trying again.');
        }

        // Generate OTP
        $GenerateOtp = rand(100000, 999999);

        // Search on database and update or create new record
        Otp::updateOrCreate(
            [
                'email' => $this->email,
            ],
            [
                'otp' => $GenerateOtp,
                'session_id' => session()->getId(),
                'expires_at' => Carbon::now() // Will Auto Increment
            ]
        );

        // Notification
        Notification::route('mail', $this->email)->notify(new OtpNotification($GenerateOtp));

        // Go to verify page
        return $this->redirect(route('auth.verify', ['email' => $this->email]), navigate: true);
    }

    public function render()
    {
        return view('pages.auth.pages.index')
            ->layout('pages.auth.layouts.layout')
            ->title('Login')
            ->with('desc', 'fasdfasdfasdfas');
    }
}
