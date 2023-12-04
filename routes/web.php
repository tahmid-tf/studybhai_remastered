<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\TeamController;
use App\Models\Footer;
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

Route::get('/', [FrontController::class, 'front'])->name('front.home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('log_out', function () {
    \auth()->logout();
    return redirect()->route('front.home');
})->name('log_out');

// ----------------------------------------------------------------------- Admin -----------------------------------------------------------------------

Route::middleware(['auth', 'admin'])
    ->prefix('admin')
    ->group(function () {
        // ------------------------------------------ Course ------------------------------------------

        Route::resource('course', CourseController::class);

        // ------------------------------------------ Course ------------------------------------------

        // ------------------------------------------ Feedback ------------------------------------------

        Route::resource('feedback', FeedbackController::class);

        // ------------------------------------------ Feedback ------------------------------------------

        // ------------------------------------------ Team ------------------------------------------

        Route::resource('team', TeamController::class);

        // ------------------------------------------ Team ------------------------------------------

            // ------------------------------------------ Footer ------------------------------------------

            Route::resource('footer', FooterController::class);

            // ------------------------------------------ Footer ------------------------------------------
    });

// ----------------------------------------------------------------------- Admin -----------------------------------------------------------------------

// ----------------------------------------------------------------------- User [ public route ] -------------------------------------------------------

Route::get('course-info/{id}', [FrontController::class, 'course_info'])->name('single_course_info');

// ------------------------------------------ Team ------------------------------------------

Route::get('team', [FrontController::class, 'team'])->name('team_info');

// ------------------------------------------ Team ------------------------------------------

// ----------------------------------------------------------------------- User [ public route ] -------------------------------------------------------

// ----------------------------------------------------------------------- Logout -----------------------------------------------------------------------

Route::middleware('auth')->group(function () {});

// ----------------------------------------------------------------------- Logout -----------------------------------------------------------------------
