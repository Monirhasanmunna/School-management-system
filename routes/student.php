<?php

use App\Http\Controllers\Api\V1\Student\{AdmissionController, StudentMigrateController};
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::controller(AdmissionController::class)
    ->prefix('v1/student')
    ->name('admission.')
    ->group(function () {
        Route::get('/admission', 'index')->name('index');
        Route::get('/admission/create', 'create')->name('create');
        Route::post('/admission', 'store')->name('store');
        // Route::get('/admission/{id}', 'show');
        Route::put('/admission/{id}', 'update');
        Route::post('/admission/section', 'section')->name('section_store');
        Route::delete('/admission/{id}', 'destroy');
        Route::get('/admission/categories', 'show')->name('categories');
        Route::post('/get/number/of/table/student','getNumberOfTable')->name('get_number_of.table_student');
    });
