<?php

use App\Livewire\Pages\Home\Pages\Index as IndexHome;
use App\Livewire\Pages\Home\Pages\Plugins\Index as IndexPlugins;
use App\Livewire\Pages\Home\Pages\Docs\Index as IndexDocs;

use App\Livewire\Pages\Auth\Pages\Index as IndexAuth;
use App\Livewire\Pages\Auth\Pages\Verify as VerifyAuth;
use App\Livewire\Pages\Auth\Pages\Logout as LogoutAuth;

use App\Livewire\Pages\Admin\Pages\Index as IndexAdmin;

use App\Livewire\Pages\Admin\Pages\Plugins\Index as IndexAdminPlugins;
use App\Livewire\Pages\Admin\Pages\Plugins\View as ViewAdminPlugins;

use App\Livewire\Pages\Admin\Pages\Docs\Index as IndexAdminDocs;
use App\Livewire\Pages\Admin\Pages\Docs\View as ViewAdminDocs;

use Illuminate\Support\Facades\Route;

Route::prefix('/')->name('home.')->group(function () {
    Route::get('/', IndexHome::class)->name('index');

    Route::prefix('/plugins')->name('plugins.')->group(function () {
        Route::get('/', IndexPlugins::class)->name('index');
    });

    Route::prefix('/docs')->name('docs.')->group(function () {
        Route::get('/{url}', IndexDocs::class)->name('index');
    });
});

Route::prefix('/auth')->name('auth.')->middleware('guest')->group(function () {
    Route::get('/', IndexAuth::class)->name('index');
    Route::get('/verify/{email}', VerifyAuth::class)->name('verify');

    Route::get('/logout', LogoutAuth::class)
        ->withoutMiddleware(['guest'])
        ->middleware(['auth'])
        ->name('logout');
});

Route::prefix('/admin')->name('admin.')->middleware(['auth', \Spatie\Permission\Middleware\RoleMiddleware::using('admin')])->group(function () {
    Route::get('/', IndexAdmin::class)->name('index');

    Route::prefix('/plugins')->name('plugins.')->group(function () {
        Route::get('/', IndexAdminPlugins::class)->name('index');
        Route::get('/{id}', ViewAdminPlugins::class)->name('view');
    });

    Route::prefix('/docs')->name('docs.')->group(function () {
        Route::get('/', IndexAdminDocs::class)->name('index');
        Route::get('/{id}', ViewAdminDocs::class)->name('view');
    });
});