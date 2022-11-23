<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\Teacher\{TeacherController};
use App\Http\Controllers\{AssignTeacherController, AssignTeacherSubjectController};
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::prefix('v1/teachers')->controller(TeacherController::class)->group(function () {
    Route::get('/', 'index')->name('teacher.index');
    Route::get('/create', 'create')->name('teacher.create');
    Route::post('/store', 'store')->name('teacher.store');
    Route::post('/get/number/of/table','getNumberOfTable')->name('get_number_of.table');
    Route::get('/{id}', 'edit')->name('teacher.edit');
    // Route::put('/update', 'update')->name('teacher.update');
    // Route::delete('/delete', 'delete')->name('teacher.delete');
});

Route::prefix('v1/teacher')
->controller(AssignTeacherController::class)
->name('assign_teacher.')
->group(function () {
    Route::get('/assign', 'index')->name('index');
    Route::post('/assign', 'store')->name('store');
});
