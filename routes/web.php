<?php

use App\Http\Controllers\Academic\SessionController;
use App\Http\Controllers\Attendance\TeachersAttendanceController;
use App\Http\Controllers\Teacher\TeacherController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ExamManagement\ExamManagementController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\InsClassController;
use App\Http\Controllers\RoutineManagement\RoutineManagementController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\ShiftController;
use App\Http\Controllers\Student\StudentMigrateController;

use App\Http\Controllers\UnderConstruction\ViewController;
use App\Http\Controllers\OnlineexamController;
use App\Http\Controllers\HomeworkController;
use App\Http\Controllers\SmsmanagementController;
use App\Http\Controllers\PushnotificationController;
use App\Http\Controllers\DigitalclassroomController;
use App\Http\Controllers\ReportmanagementController;
use App\Http\Controllers\AccountsmanagementController;
use App\Http\Controllers\WebsitemanagementController;
use App\Http\Controllers\SoftwaresettingController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();


Route::get('/underconstruction',[ViewController::class,'index'])->name('unc_message');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['as'=>'session.','prefix'=>'/academic/session/'],function(){
    Route::get('/index',[SessionController::class,'index'])->name('index');
    Route::post('/store',[SessionController::class,'store'])->name('store');
    Route::get('/edit/{id}',[SessionController::class,'edit'])->name('edit');
    Route::get('/{id}/show',[SessionController::class,'show'])->name('show');
    Route::post('/update/{id}',[SessionController::class,'update'])->name('update');
    Route::post('/destroy/{id}',[SessionController::class,'destroy'])->name('destroy');
});


Route::group(['as'=>'classes.','prefix'=>'/academic/ins'],function(){
    Route::get('/index',[InsClassController::class,'index'])->name('index');
    Route::post('/store',[InsClassController::class,'store'])->name('store');
    Route::get('/edit/{id}',[InsClassController::class,'edit'])->name('edit');
    Route::get('/{id}/show',[InsClassController::class,'show'])->name('show');
    Route::post('/update/{id}',[InsClassController::class,'update'])->name('update');
    Route::post('/{id}/destroy',[InsClassController::class,'destroy'])->name('destroy');
});


Route::group(['as'=>'teacher.','prefix'=>'/teacher/'],function(){
    Route::get('/index',[TeacherController::class,'index'])->name('index');
    Route::get('/create',[TeacherController::class,'create'])->name('create');
    Route::post('/store',[TeacherController::class,'store'])->name('store');
    Route::get('/edit/{id}',[TeacherController::class,'edit'])->name('edit');
    Route::get('/{id}/show',[TeacherController::class,'show'])->name('show');
    Route::post('/update/{id}',[TeacherController::class,'update'])->name('update');
    Route::post('/destroy/{id}',[TeacherController::class,'destroy'])->name('destroy');
});


Route::group(['as'=>'student.','prefix'=>'/student/'],function(){
    Route::get('/index',[StudentMigrateController::class,'index'])->name('index');
    Route::post('/store',[StudentMigrateController::class,'store'])->name('store');
    Route::get('/create',[StudentMigrateController::class,'create'])->name('create');
    Route::get('/edit/{id}',[StudentMigrateController::class,'edit'])->name('edit');
    Route::get('/{id}/show',[StudentMigrateController::class,'show'])->name('show');
    Route::post('/update/{id}',[StudentMigrateController::class,'update'])->name('update');
    Route::post('/destroy/{id}',[StudentMigrateController::class,'destroy'])->name('destroy');
});
// Oneline Exam
Route::group(['as'=>'onlineexam.','prefix'=>'/onlineexam/'],function(){
    Route::get('/index',[OnlineexamController::class,'index'])->name('index');
    Route::post('/store',[OnlineexamController::class,'store'])->name('store');
    Route::get('/create',[OnlineexamController::class,'create'])->name('create');
    Route::get('/edit/{id}',[OnlineexamController::class,'edit'])->name('edit');
    Route::get('/{id}/show',[OnlineexamController::class,'show'])->name('show');
    Route::post('/update/{id}',[OnlineexamController::class,'update'])->name('update');
    Route::post('/destroy/{id}',[OnlineexamController::class,'destroy'])->name('destroy');
});
// Home Work
Route::group(['as'=>'homework.','prefix'=>'/homework/'],function(){
    Route::get('/index',[HomeworkController::class,'index'])->name('index');
    Route::post('/store',[HomeworkController::class,'store'])->name('store');
    Route::get('/create',[HomeworkController::class,'create'])->name('create');
    Route::get('/edit/{id}',[HomeworkController::class,'edit'])->name('edit');
    Route::get('/{id}/show',[HomeworkController::class,'show'])->name('show');
    Route::post('/update/{id}',[HomeworkController::class,'update'])->name('update');
    Route::post('/destroy/{id}',[HomeworkController::class,'destroy'])->name('destroy');
});
// Sms Management
Route::group(['as'=>'smsmanagement.','prefix'=>'/smsmanagement/'],function(){
    Route::get('/index',[SmsmanagementController::class,'index'])->name('index');
    Route::post('/store',[SmsmanagementController::class,'store'])->name('store');
    Route::get('/create',[SmsmanagementController::class,'create'])->name('create');
    Route::get('/edit/{id}',[SmsmanagementController::class,'edit'])->name('edit');
    Route::get('/{id}/show',[SmsmanagementController::class,'show'])->name('show');
    Route::post('/update/{id}',[SmsmanagementController::class,'update'])->name('update');
    Route::post('/destroy/{id}',[SmsmanagementController::class,'destroy'])->name('destroy');
});
// Push Notification
Route::group(['as'=>'pushnotification.','prefix'=>'/pushnotification/'],function(){
    Route::get('/index',[PushnotificationController::class,'index'])->name('index');
    Route::post('/store',[PushnotificationController::class,'store'])->name('store');
    Route::get('/create',[PushnotificationController::class,'create'])->name('create');
    Route::get('/edit/{id}',[PushnotificationController::class,'edit'])->name('edit');
    Route::get('/{id}/show',[PushnotificationController::class,'show'])->name('show');
    Route::post('/update/{id}',[PushnotificationController::class,'update'])->name('update');
    Route::post('/destroy/{id}',[PushnotificationController::class,'destroy'])->name('destroy');
});
// Digital ClassRoom
Route::group(['as'=>'digitalclassroom.','prefix'=>'/digitalclassroom/'],function(){
    Route::get('/index',[DigitalclassroomController::class,'index'])->name('index');
    Route::post('/store',[DigitalclassroomController::class,'store'])->name('store');
    Route::get('/create',[DigitalclassroomController::class,'create'])->name('create');
    Route::get('/edit/{id}',[DigitalclassroomController::class,'edit'])->name('edit');
    Route::get('/{id}/show',[DigitalclassroomController::class,'show'])->name('show');
    Route::post('/update/{id}',[DigitalclassroomController::class,'update'])->name('update');
    Route::post('/destroy/{id}',[DigitalclassroomController::class,'destroy'])->name('destroy');
});

// Report Management
Route::group(['as'=>'reportmanagement.','prefix'=>'/reportmanagement/'],function(){
    Route::get('/index',[ReportmanagementController::class,'index'])->name('index');
    Route::post('/store',[ReportmanagementController::class,'store'])->name('store');
    Route::get('/create',[ReportmanagementController::class,'create'])->name('create');
    Route::get('/edit/{id}',[ReportmanagementController::class,'edit'])->name('edit');
    Route::get('/{id}/show',[ReportmanagementController::class,'show'])->name('show');
    Route::post('/update/{id}',[ReportmanagementController::class,'update'])->name('update');
    Route::post('/destroy/{id}',[ReportmanagementController::class,'destroy'])->name('destroy');
});
// Report Management
Route::group(['as'=>'accountmanagement.','prefix'=>'/accountmanagement/'],function(){
    Route::get('/index',[AccountsmanagementController::class,'index'])->name('index');
    Route::post('/store',[AccountsmanagementController::class,'store'])->name('store');
    Route::get('/create',[AccountsmanagementController::class,'create'])->name('create');
    Route::get('/edit/{id}',[AccountsmanagementController::class,'edit'])->name('edit');
    Route::get('/{id}/show',[AccountsmanagementController::class,'show'])->name('show');
    Route::post('/update/{id}',[AccountsmanagementController::class,'update'])->name('update');
    Route::post('/destroy/{id}',[AccountsmanagementController::class,'destroy'])->name('destroy');
});
// Website Management
Route::group(['as'=>'websitemanagement.','prefix'=>'/websitemanagement/'],function(){
    Route::get('/index',[WebsitemanagementController::class,'index'])->name('index');
    Route::post('/store',[WebsitemanagementController::class,'store'])->name('store');
    Route::get('/create',[WebsitemanagementController::class,'create'])->name('create');
    Route::get('/edit/{id}',[WebsitemanagementController::class,'edit'])->name('edit');
    Route::get('/{id}/show',[WebsitemanagementController::class,'show'])->name('show');
    Route::post('/update/{id}',[WebsitemanagementController::class,'update'])->name('update');
    Route::post('/destroy/{id}',[WebsitemanagementController::class,'destroy'])->name('destroy');
});
// Software Setting
Route::group(['as'=>'softwaresetting.','prefix'=>'/softwaresetting/'],function(){
    Route::get('/index',[SoftwaresettingController::class,'index'])->name('index');
    Route::post('/store',[SoftwaresettingController::class,'store'])->name('store');
    Route::get('/create',[SoftwaresettingController::class,'create'])->name('create');
    Route::get('/edit/{id}',[SoftwaresettingController::class,'edit'])->name('edit');
    Route::get('/{id}/show',[SoftwaresettingController::class,'show'])->name('show');
    Route::post('/update/{id}',[SoftwaresettingController::class,'update'])->name('update');
    Route::post('/destroy/{id}',[SoftwaresettingController::class,'destroy'])->name('destroy');
});

Route::group(['as'=>'routine.','prefix'=>'/routine/class'],function(){
    Route::get('/index',[RoutineManagementController::class,'index'])->name('index');
    Route::post('/store',[RoutineManagementController::class,'store'])->name('store');
    Route::get('/create',[RoutineManagementController::class,'create'])->name('create');
    Route::get('/edit/{id}',[RoutineManagementController::class,'edit'])->name('edit');
    Route::get('/{id}/show',[RoutineManagementController::class,'show'])->name('show');
    Route::post('/update/{id}',[RoutineManagementController::class,'update'])->name('update');
    Route::post('/destroy/{id}',[RoutineManagementController::class,'destroy'])->name('destroy');
});


Route::group(['as'=>'exam.','prefix'=>'/exam/mark'],function(){
    Route::get('/index',[ExamManagementController::class,'index'])->name('index');
    Route::post('/store',[ExamManagementController::class,'store'])->name('store');
    Route::get('/create',[ExamManagementController::class,'create'])->name('create');
    Route::get('/edit/{id}',[ExamManagementController::class,'edit'])->name('edit');
    Route::get('/{id}/show',[ExamManagementController::class,'show'])->name('show');
    Route::post('/update/{id}',[ExamManagementController::class,'update'])->name('update');
    Route::post('/destroy/{id}',[ExamManagementController::class,'destroy'])->name('destroy');
});


Route::group(['as'=>'onlineexam.','prefix'=>'/online/exam'],function(){
    Route::get('/index',[OnlineExamController::class,'index'])->name('index');
    Route::post('/store',[OnlineExamController::class,'store'])->name('store');
    Route::get('/create',[OnlineExamController::class,'create'])->name('create');
    Route::get('/edit/{id}',[OnlineExamController::class,'edit'])->name('edit');
    Route::get('/{id}/show',[OnlineExamController::class,'show'])->name('show');
    Route::post('/update/{id}',[OnlineExamController::class,'update'])->name('update');
    Route::post('/destroy/{id}',[OnlineExamController::class,'destroy'])->name('destroy');
});


Route::group(['as'=>'attendance.','prefix'=>'/attendance'],function(){
    Route::get('/index',[TeachersAttendanceController::class,'index'])->name('index');
    Route::post('/store',[TeachersAttendanceController::class,'store'])->name('store');
    Route::get('/create',[TeachersAttendanceController::class,'create'])->name('create');
    Route::get('/edit/{id}',[TeachersAttendanceController::class,'edit'])->name('edit');
    Route::get('/{id}/show',[TeachersAttendanceController::class,'show'])->name('show');
    Route::post('/update/{id}',[TeachersAttendanceController::class,'update'])->name('update');
    Route::post('/destroy/{id}',[TeachersAttendanceController::class,'destroy'])->name('destroy');
});



// Route::group(['as'=>'shift.','prefix'=>'/academic/'],function(){
//     Route::get('/index',[ShiftController::class,'index'])->name('index');
//     Route::post('/store',[ShiftController::class,'store'])->name('store');
//     Route::get('/edit/{id}',[ShiftController::class,'edit'])->name('edit');
//     Route::get('/{id}/show',[ShiftController::class,'show'])->name('show');
//     Route::post('/update/{id}',[ShiftController::class,'update'])->name('update');
//     Route::post('/{id}/destroy',[ShiftController::class,'destroy'])->name('destroy');
// });


// Route::group(['as'=>'category.','prefix'=>'/academic/'],function(){
//     Route::get('/index',[CategoryController::class,'index'])->name('index');
//     Route::post('/store',[CategoryController::class,'store'])->name('store');
//     Route::get('/edit/{id}',[CategoryController::class,'edit'])->name('edit');
//     Route::get('/{id}/show',[CategoryController::class,'show'])->name('show');
//     Route::post('/update/{id}',[CategoryController::class,'update'])->name('update');
//     Route::post('/{id}/destroy',[CategoryController::class,'destroy'])->name('destroy');
// });


// Route::group(['as'=>'section.','prefix'=>'/academic/'],function(){
//     Route::get('/index',[SectionController::class,'index'])->name('index');
//     Route::post('/store',[SectionController::class,'store'])->name('store');
//     Route::get('/edit/{id}',[SectionController::class,'edit'])->name('edit');
//     Route::get('/{id}/show',[SectionController::class,'show'])->name('show');
//     Route::post('/update/{id}',[SectionController::class,'update'])->name('update');
//     Route::post('/{id}/destroy',[SectionController::class,'destroy'])->name('destroy');
// });

// Route::group(['as'=>'group.','prefix'=>'/academic/'],function(){
//     Route::get('/index',[GroupController::class,'index'])->name('index');
//     Route::post('/store',[GroupController::class,'store'])->name('store');
//     Route::get('/edit/{id}',[GroupController::class,'edit'])->name('edit');
//     Route::get('/{id}/show',[GroupController::class,'show'])->name('show');
//     Route::post('/update/{id}',[GroupController::class,'update'])->name('update');
//     Route::post('/{id}/destroy',[GroupController::class,'destroy'])->name('destroy');
// });



include_once('branch.php');
include_once('designation.php');
include_once('cms.php');
include_once('attendance.php');
// Frontend Routes
include_once('landing.php');
