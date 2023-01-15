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
// Route::resource('/report', ReportController::class);
Route::controller(App\Http\Controllers\ReportController::class)->group(function () {

    Route::get('/home', 'index')->name('report.ReportHomePage');//link to go to reporthomepage
    Route::get('/add', 'create')->name('report.AddProposal');//link to go to add page
    Route::get('/show/{id}', 'App\Http\Controllers\ReportController@show')->name('report.ViewReport');//link to go to show page
    Route::post('/store', 'store')->name('store');//link to store the data in the database
    Route::get('edit/{id}', 'App\Http\Controllers\ReportController@edit')->name('edit');//link to go to edit page
    Route::put('update/{id}', 'App\Http\Controllers\ReportController@update')->name('update');//link to update the data in the database
    Route::put('updateStatusApproved/{id}', 'App\Http\Controllers\ReportController@updateStatusApproved')->name('updateStatusApproved');//link to update status the data in the database
    Route::put('updateStatusReject/{id}', 'App\Http\Controllers\ReportController@updateStatusReject')->name('updateStatusReject');//link to update status the data in the database
    Route::delete('report/{report}', 'App\Http\Controllers\ReportController@destroy')->name('destroy');//link to delete the data from the database

    Route::get('/report', 'App\Http\Controllers\ReportController@generate')->name('report.ViewProposal');//link to go to reporthomepage
    Route::post('/generate/{id}', 'App\Http\Controllers\ReportController@storeReport')->name('storeReport');//link to store the data in the database
    Route::get('/check-proposal-id/{proposalId}', 'YourController@checkProposalId')->name('checkProposalId');

}); 

