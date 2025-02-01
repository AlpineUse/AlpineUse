<?php

use App\Livewire\Pages\Home\Pages\Index;
use Illuminate\Support\Facades\Route;

Route::name('home.')->middleware(['guest'])->group(function () {
    Route::get('/', Index::class)->name('index');
});