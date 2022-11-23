<?php

use App\Http\Controllers\{StudentAttendanceController};
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register your routes
|
*/

    Route::controller(StudentAttendanceController::class)
    ->prefix('/attendance')
    ->name('StudentAttend.')
    ->group(function () {
        Route::get('/student', 'index')->name('index');
    });