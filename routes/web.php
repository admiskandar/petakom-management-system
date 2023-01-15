<?php

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

    Route::controller(App\Http\Controllers\ActivityController::class)->group(function(){
        Route::get('/activity','index')->name('activity.ActivityInterface');
        Route::get('/addactivity','create')->name('activity.AddActivityInterface');
        Route::post('/storeactivity','store')->name('store');
        Route::get('/listactivity', 'show')->name('activity.ViewActivityInterface');
        Route::get('viewactivity/{id}', 'showListActivity')->name('showListActivity');
        Route::get('delete/{id}', 'destroy')->name('destroy');
        Route::post('updateactivity/{id}', 'update')->name('updateactivity');
        Route::get('editActivity/{id}', 'editPage')->name('editActivity');



    });

//     Route::get('/activity', function () {
//          return view('ManageActivity.ActivityInterface');
//     })->name('activity');

//     Route::get('/addactivity', function () {
//          return view('ManageActivity.AddActivityInterface');
//     })->name('addactivity');

//     Route::post('/store', function () {
//         return view('store');
//    })->name('storeActivity');

   
    Route::get('/calendar', function () {
        return view('ManageCalendar.CalendarHome');
    })->name('calendar');

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
