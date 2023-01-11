<?php

use App\Http\Controllers\ReportController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');






    //temporary
    Route::get('/profile', function () {
        return view('ManageProfile.UpdateProfilePage');
    })->name('profile');

    Route::get('/registration', function () {
        return view('ManageRegistration.AddRegistrationPage');
    })->name('registration');

    Route::get('/activity', function () {
        return view('ManageActivity.ActivityInterface');
    })->name('activity');

    Route::get('/calendar', function () {
        return view('ManageCalendar.CalendarHome');
    })->name('calendar');

    Route::get('/election', function () {
        return view('ManageElection.ViewLeaderboard');
    })->name('election');

    // Route::get('/report', function () {
    //     return view('ManageReport.ReportHome');
    // })->name('report');

    Route::get('/bulletin', function () {
        return view('ManageBulletin.BulletinBoard');
    })->name('bulletin');
});

// The route we have created to show all report.
Route::resource('/report', ReportController::class);
