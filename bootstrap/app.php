<?php

use App\Http\Middleware\AuthAdminMiddleware;
use App\Http\Middleware\AuthCustomerMiddleware;
use Illuminate\Foundation\Application;
use App\Http\Middleware\AuthServiceProviderMiddleware;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'auth_admin' => AuthAdminMiddleware::class,
            'auth_service_provider' => AuthServiceProviderMiddleware::class,
            'auth_customer' => AuthCustomerMiddleware::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
