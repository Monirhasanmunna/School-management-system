<?php

use App\Http\Controllers\Api\V1\Academic\SessionController;
use App\Http\Controllers\{
    GroupController,
    CategoryController,
    SectionController,
    InsClassController,
    TeacherAttendanceController,
    ShiftController
};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register your routes
|
*/

Route::controller(SessionController::class)
    ->prefix('/academic/')
    ->name('session.')
    ->group(function () {
        Route::get('/sessions', 'index')->name('index');
        Route::post('/sessions', 'store')->name('store');
        Route::get('/sessions/{id}', 'show')->name('show');
        Route::put('/sessions/{id}', 'update');
        Route::delete('/sessions/{id}', 'destroy');
    });
    Route::controller(InsClassController::class)
    ->prefix('/academic/')
    ->name('classes.')
    ->group(function () {
        Route::get('/classes', 'index')->name('index');
        Route::post('/classes', 'store')->name('store');
        Route::get('/classes/{id}', 'show')->name('show');
        Route::put('/classes/{id}', 'update');
        Route::delete('/classes/{id}', 'destroy');
    });

     Route::controller(ShiftController::class)
    ->prefix('/academic/')
    ->name('shift.')
    ->group(function () {
        Route::post('/shift', 'store')->name('store');
    });

    Route::controller(CategoryController::class)
    ->prefix('/academic/')
    ->name('category.')
    ->group(function () {
        Route::post('/category', 'store')->name('store');
    });

     Route::controller(SectionController::class)
    ->prefix('/academic/')
    ->name('section.')
    ->group(function () {
        Route::post('/section', 'store')->name('store');
    });
    Route::controller(GroupController::class)
    ->prefix('/academic/')
    ->name('group.')
    ->group(function () {
        Route::post('/group', 'store')->name('store');
    });
    
