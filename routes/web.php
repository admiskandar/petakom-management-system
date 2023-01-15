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

    Route::get('/activity', function () {
        return view('ManageActivity.ActivityInterface');
    })->name('activity');

    Route::get('/calendar', function () {
        return view('ManageCalendar.CalendarHome');
    })->name('calendar');

    Route::get('/election', function () {
        return view('ManageElection.ViewLeaderboard');
    })->name('election');

    Route::get('/report', function () {
        return view('ManageReport.ViewProposal');
    })->name('report');

});

use App\Http\Controllers\BulletinController;
Route::get('/bookmark', function () {
    return view('ManageBulletin.MyBookmark');
})->name('bookmark');

// Route::get('ViewBookmark', 'BulletinController@ViewBookmark')->name('bulletin.ViewBookmark');

Route::resource('bulletin', BulletinController::class);
Route::get('/ViewBookmark', [BulletinController::class,'ViewBookmark'])->name('bulletin.ViewBookmark');
Route::post('/AddBookmark/{id}', [BulletinController::class,'AddBookmark'])->name('bulletin.AddBookmark');
