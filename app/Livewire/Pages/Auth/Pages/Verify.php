<?php

namespace App\Livewire\Pages\Auth\Pages;

use App\Models\Otp;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Livewire\Attributes\Locked;
use Livewire\Component;

class Verify extends Component
{
    public $otp;

    #[Locked]
    public $email;

    #[Locked]
    public $token;

    public function submit()
    {
        // Validates
        $this->validate([
            'email' => 'required|email',
            'otp' => 'required|numeric|digits:6'
        ]);

        // RateLimiter
        if (!RateLimiter::attempt('otp-verify:' . $this->email, 5, function () {}, 60)) {
            $this->addError('otp', 'Too many requests. Please wait 1 minute before trying again.');
        }

        // Otp Database [otp, $this->email, sessionID]
        $OtpDB = Otp::where('otp', $this->otp)
        ->where('email', $this->email)
        ->where('session_id', session()->getId())
        ->first();

        // Check OTP
        if (empty($OtpDB) || $OtpDB->otp != $this->otp) {
            $this->addError('otp', 'OTP Not Correct!');
            return;
        }

        // Delete successfly OTP
        $OtpDB->delete();

        // Search Email and Create or Login
        $userDB = User::firstOrCreate(
            ['email' => $this->email],
            [
                'name' => explode('@', $this->email)[0],
                'password' => Hash::make(Str::random(12)),
            ]
        );

        // Assing Role User
        if ($userDB->wasRecentlyCreated) {
            $userDB->assignRole('user');
        }

        // Login
        Auth::login($userDB);

        // Return to Dashboard Page
        return $this->redirect(route('dashboard.index'), navigate: true);
    }

    public function mount($email)
    {
        // Email
        $this->email = $email;

        // Search on Database
        $OtpDB = Otp::where('email', $email)
            ->where('session_id', session()->getId())
            ->first();
        
        // Check OTP Validate
        if(empty($OtpDB)){
            return $this->redirect(abort(404));
        }
    }

    public function render()
    {
        return view('pages.auth.pages.verify')
            ->layout('pages.auth.layouts.layout')
            ->title('Verify')
            ->with('desc', 'Verification Page');
    }
}