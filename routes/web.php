<?php

use App\Http\Controllers\ElectionController;
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

    // Route::get('/election', function () {
    //     return view('ManageElection.ViewLeaderboard');
    // })->name('election');

    Route::get('/report', function () {
        return view('ManageReport.ViewProposal');
    })->name('report');

    Route::get('/bulletin', function () {
        return view('ManageBulletin.BulletinBoard');
    })->name('bulletin');

    Route::resource('/election', ElectionController::class);

    Route::get('leaderboard', [ElectionController::class,'leaderboard'])->name('election.leaderboard'); 
    Route::get('ranking', [ElectionController::class,'ranking'])->name('election.ranking'); 
    Route::get('filter', [ElectionController::class,'filter'])->name('election.filter'); 
    Route::get('sort', [ElectionController::class,'sort'])->name('election.sort'); 
    Route::get('search', [ElectionController::class,'search'])->name('election.search'); 
    Route::get('vote', [ElectionController::class,'vote'])->name('election.vote'); 
    Route::get('filter2', [ElectionController::class,'filter2'])->name('election.filter2'); 
    Route::get('voteedit/{id}', [ElectionController::class,'voteedit'])->name('election.voteedit'); 

});
