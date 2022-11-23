<?php

use App\Http\Controllers\Api\V1\Ins\InstitutionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can add more routes...
|
*/

Route::controller(InstitutionController::class)
    ->prefix('/v1/institutions')
    ->name('institutions.')
    ->group(function () {
        Route::get('/', 'index');
        Route::post('/', 'store');
        Route::get('/{id}', 'show');
        Route::put('/{id}', 'update');
    });
