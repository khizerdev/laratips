<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::middleware(['auth'])->group(function() {
    Route::get('dashboard' , DashboardController::class)->name('dashboard');
});


require __DIR__.'/auth.php';
