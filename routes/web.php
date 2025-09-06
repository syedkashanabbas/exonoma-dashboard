<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Artisan;

// By default redirect to login if not authenticated
Route::get('/', function () {
    return redirect()->route('login');
});

// Authenticated routes
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/plans', [DashboardController::class, 'plans'])->name('dashboard.plans');
    Route::get('/ai-signals', [DashboardController::class, 'aiSignals'])->name('dashboard.ai-signals');
    Route::get('/risk-hedging', [DashboardController::class, 'riskHedging'])->name('dashboard.risk-hedging');
    Route::get('/transactions-history', [DashboardController::class, 'transactionsHistory'])
     ->name('dashboard.transactions-history');
     Route::get('/performance-analytics', [DashboardController::class, 'performanceAnalytics'])
     ->name('dashboard.performance-analytics');
     Route::get('/reports-compliance', [DashboardController::class, 'reportsCompliance'])
     ->name('dashboard.reports-compliance');
Route::get('/notifications-center', [DashboardController::class, 'notificationsCenter'])
     ->name('dashboard.notifications-center');
     Route::get('/multi-account-management', [DashboardController::class, 'multiAccount'])
     ->name('dashboard.multi-account');
     Route::get('/market-dashboard', [DashboardController::class, 'marketDashboard'])
     ->name('dashboard.market');
     

});




Route::get('/clear-all-cache', function () {
    Artisan::call('optimize:clear');   // clears config, cache, routes, views
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');

    return "✅ All Laravel caches cleared!";
});