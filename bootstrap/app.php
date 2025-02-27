<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Support\Facades\Request;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {

        // Auth
        $middleware->redirectGuestsTo(fn(Illuminate\Http\Request $request) => url()->route('auth.index'));
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
