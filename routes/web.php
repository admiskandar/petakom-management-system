<?php

use App\Http\Controllers\CalendarController;
use GuzzleHttp\Promise\Create;
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


    // Route::resource('/calendar', CalendarController::class);
    // Route::get('/add', function () {
    //     return view('loadCalendar');
    // })->name('calendar/AddCalendarPage');
    // Route::get('/add', function () {
    //     return view('ManageCalendar.AddCalendarPage');
    // })->name('calendar/AddCalendarPage');
    // Route::get('/add' , [App\Http\Controllers\CalendarController::class, 'loadCalendar'])->name('calendar/AddCalendarPage');

    Route::controller(App\Http\Controllers\CalendarController::class)->group(function () {
        Route::get('/home', 'index')->name('calendar.CalendarHomePage');
        Route::get('/add', 'loadCalendar')->name('calendar.AddCalendarPage');
        Route::post('/store', 'store')->name('storeC');
        Route::get('/list', 'show')->name('calendar.ListCalendarPage');
        Route::get('calendarDetails/{id}', 'showCalendar')->name('showCalendar');
        Route::post('update/{id}', 'update')->name('update');
        Route::get('delete/{id}', 'destroy')->name('destroy');

    }); 

 
    Route::get('/election', function () {
        return view('ManageElection.ViewLeaderboard');
    })->name('election');

    Route::get('/report', function () {
        return view('ManageReport.ViewProposal');
    })->name('report');

    Route::get('/bulletin', function () {
        return view('ManageBulletin.BulletinBoard');
    })->name('bulletin');
});
