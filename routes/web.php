<?php


use App\Livewire\Pages\Home\Pages\Index as IndexHome;

use App\Livewire\Pages\Auth\Pages\Index as IndexAuth;
use App\Livewire\Pages\Auth\Pages\Verify as VerifyAuth;

use Illuminate\Support\Facades\Route;

Route::prefix('/')->name('home.')->middleware(['guest'])->group(function () {
    Route::get('/', IndexHome::class)->name('index');
});


Route::prefix('/auth')->name('auth.')->middleware(['guest'])->group(function () {
    Route::get('/', IndexAuth::class)->name('index');
    Route::get('/verify', VerifyAuth::class)->name('verify');
});