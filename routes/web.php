<?php

use Illuminate\Support\Facades\Route;

Route::controller(\App\Http\Controllers\DashboardController::class)
    ->prefix('crm')
    ->name('crm.')
    ->group(static function (\Illuminate\Routing\Router $router) {
        $router->get('/dashboard', 'dashboard')->name('dashboard');
        $router->get('/login', 'crmLogin')->name('login');
        $router->get('/dashboard-data', 'crmData')->name('data');
});
