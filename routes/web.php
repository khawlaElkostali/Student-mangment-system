<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\BatchController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::prefix('admin')->name('admin.')->group(function(){
    Route::get('dashboared',[AdminController::class,'dashboared'])->name('dashboared')->middleware('admin');
    Route::get('login',[AdminController::class,'login'])->name('login');
    Route::post('login',[AdminController::class,'adminLogin'])->name('adminLogin');
    Route::get('logout',[AdminController::class,'logout'])->name('logout');
    Route::get('register',[AdminController::class,'register'])->name('register');
    Route::post('register',[AdminController::class,'adminRegister'])->name('adminRegister');


});


Route::middleware('admin')->group(function(){

    Route::resource('students',StudentController::class);

    Route::resource('teachers',TeacherController::class);

    Route::resource('courses',CourseController::class);

    Route::resource('batches',BatchController::class);

    Route::resource('enrollments',EnrollmentController::class);

    Route::resource('payments',PaymentController::class);

    Route::get('/', function () {
        return view('layout');
    })->name('home');

});




Route::get('/home', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
