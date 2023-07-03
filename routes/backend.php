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

