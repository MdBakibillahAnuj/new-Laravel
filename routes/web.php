<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\PageViewController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\SubjectController;

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

Route::get('/', [PageViewController::class, 'home'])->name('home');
Route::get('/subject-details', [PageViewController::class, 'SubjectDetails'])->name('subject-details');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.home.home');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->group(function (){
//    admin routes
    Route::middleware('is_admin')->get('/create-role', [RoleController::class, 'create'])->name('create-role');
    Route::middleware('is_admin')->post('/new-role', [RoleController::class, 'newRole'])->name('new-role');

//    user module
    Route::get('/create-user', [UserController::class, 'createUser'])->name('create-user');
    Route::post('/new-user', [UserController::class, 'newUser'])->name('new-user');
    Route::get('/manage-user', [UserController::class, 'manageUser'])->name('manage-user');
    Route::get('/edit-user/{id}', [UserController::class, 'editUser'])->name('edit-user');
    Route::post('/update-user/{id}', [UserController::class, 'updateUser'])->name('update-user');
    Route::get('/delete-user/{id}', [UserController::class, 'deleteUser'])->name('delete-user');


//    teachers routes
    Route::get('/create-profile', [TeacherController::class, 'createProfile'])->name('create-profile');
    Route::post('/new-profile', [TeacherController::class, 'newProfile'])->name('new-profile');
    Route::get('/manage-profile', [TeacherController::class, 'manageProfile'])->name('manage-profile');
    Route::get('/edit-profile/{id}', [TeacherController::class, 'editProfile'])->name('edit-profile');
    Route::post('/update-profile/{id}', [TeacherController::class, 'updateProfile'])->name('update-profile');
    Route::get('/delete-profile/{id}', [TeacherController::class, 'deleteProfile'])->name('delete-profile');
    Route::get('/change-teacher-profile-status/{id}', [TeacherController::class, 'profileStatus'])->name('change-teacher-profile-status');

    //    subject routes
    Route::get('/create-subject', [SubjectController::class, 'createSubject'])->name('create-subject');
    Route::post('/new-subject', [SubjectController::class, 'newSubject'])->name('new-subject');
    Route::get('/manage-subject', [SubjectController::class, 'manageSubject'])->name('manage-subject');
    Route::get('/edit-subject/{id}', [SubjectController::class, 'editSubject'])->name('edit-subject');
    Route::post('/update-subject/{id}', [SubjectController::class, 'updateSubject'])->name('update-subject');
    Route::get('/delete-subject/{id}', [SubjectController::class, 'deleteSubject'])->name('delete-subject');
    Route::get('/change-subject-status/{id}', [SubjectController::class, 'subjectStatus'])->name('change-subject-status');


//    student module
    Route::get('/create-student-info', [StudentController::class, 'createStudentInfo'])->name('create-student-info');
    Route::post('/new-student-info', [StudentController::class, 'newStudentInfo'])->name('new-student-info');
    Route::get('/manage-student-info', [StudentController::class, 'manageStudentInfo'])->name('manage-student-info');
    Route::get('/edit-student-info/{id}', [StudentController::class, 'editStudentInfo'])->name('edit-student-info');
    Route::post('/update-student-info/{id}', [StudentController::class, 'updateStudentInfo'])->name('update-student-info');
    Route::get('/delete-student-info/{id}', [StudentController::class, 'deleteStudentInfo'])->name('delete-student-info');
    Route::get('/change-student-status/{id}', [StudentController::class, 'profileStatus'])->name('change-student-profile-status');
});
