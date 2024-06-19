<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\Admin;
use App\Http\Middleware\normal;
use App\Http\Middleware\Teacher;

return Application::configure(basePath: dirname(__DIR__))
->withRouting(
    web: __DIR__.'/../routes/web.php',
    commands: __DIR__.'/../routes/console.php',
    health: '/up',
)
->withMiddleware(function (Middleware $middleware) {
    $middleware->alias([
        'admin'  => Admin::class,
        'user'  => normal::class,
        'teacher'  => Teacher::class,
        'setLocale' => SetLocale::class,

    ]);

    $middleware->web(append:[
        App\Http\Middleware\LocalizationMiddleware::class,
    ]);

})
->withExceptions(function (Exceptions $exceptions) {
        //
})->create();
