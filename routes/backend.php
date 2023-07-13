<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\DashboardController;
/*
|--------------------------------------------------------------------------
| Backend  Routes
|--------------------------------------------------------------------------
|
| 
|
*/

Route::get('/Admin_Dashboard' , [DashboardController::class , 'index']);

Route::get('/dashboard/user', function () {
    return view('Dashboard.User.dashboard');
})->middleware(['auth'])->name('dashboard.user');

require __DIR__.'/auth.php';
