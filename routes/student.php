<?php

use App\Http\Controllers\Student\StudentDashboardController;
use App\Http\Controllers\Student\StudentLoginController;
use App\Http\Controllers\Student\StudentSignUpController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Student Routes
|--------------------------------------------------------------------------
*/

Route::group(
    [
        'namespace' => 'Student',
        'middleware' => ['auth:student', 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath'],
    ],
    function () {
        Route::get('/portfolio', [StudentDashboardController::class, 'index'])->name('student.portfolio');
        Route::get('/courses', [StudentDashboardController::class, 'courses'])->name('student.courses');
        Route::get('/courses-paging', [StudentDashboardController::class, 'coursesPaging'])->name('courses.paging');
        Route::get('/update-account', [StudentDashboardController::class, 'getUpdateAccount'])->name('student.update.account');
        Route::post('/update-account', [StudentDashboardController::class, 'updateAccount'])->name('student.update.account');
    },
);

/////////////////////////////////////////////////////////////////////////////////////////////
/// Guest => that mean:must not be admin => because any one must be able to access login page
Route::group(['namespace' => 'Student', 'middleware' => 'guest:student'], function () {
    Route::get('/', [StudentLoginController::class, 'getLogin'])->name('get.student.login');
    Route::post('/', [StudentLoginController::class, 'doLogin'])->name('student.login');

    Route::group(['prefix' => 'signup'], function () {
        Route::get('/', [StudentSignUpController::class, 'getSignup'])->name('student.signup');
        Route::post('/store', [StudentSignUpController::class, 'doSignup'])->name('student.signup.store');
    });
});
// /////////////////////////////////////////////////////////////////////////////////////////////
// /// Logout
Route::get('/student/logout', [StudentLoginController::class, 'logout'])->name('student.logout');
