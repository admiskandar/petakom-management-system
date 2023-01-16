<?php


use App\Http\Controllers\ReportController;


use App\Http\Controllers\ElectionController;

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


    Route::resource('/election', ElectionController::class);
    Route::get('electionleaderboard', [ElectionController::class,'leaderboard'])->name('election.leaderboard'); 
    Route::get('electionranking', [ElectionController::class,'ranking'])->name('election.ranking'); 
    Route::get('electionfilter', [ElectionController::class,'filter'])->name('election.filter'); 
    Route::get('electionsort', [ElectionController::class,'sort'])->name('election.sort'); 
    Route::get('electionsearch', [ElectionController::class,'search'])->name('election.search'); 
    Route::get('electionvote', [ElectionController::class,'vote'])->name('election.vote'); 
    Route::get('electionfilter2', [ElectionController::class,'filter2'])->name('election.filter2'); 
    Route::get('electionvoteedit/{id}', [ElectionController::class,'voteedit'])->name('election.voteedit'); 
});
   

    // Route::get('/election', function () {
    //     return view('ManageElection.ViewLeaderboard');
    // })->name('election');


    // Route::resource('/calendar', CalendarController::class);
    // Route::get('/add', function () {
    //     return view('loadCalendar');
    // })->name('calendar/AddCalendarPage');
    // Route::get('/add', function () {
    //     return view('ManageCalendar.AddCalendarPage');
    // })->name('calendar/AddCalendarPage');
    // Route::get('/add' , [App\Http\Controllers\CalendarController::class, 'loadCalendar'])->name('calendar/AddCalendarPage');

    Route::controller(App\Http\Controllers\ActivityController::class)->group(function(){
        Route::get('/activity','index')->name('activity.ActivityInterface');
        Route::get('/addactivity','create')->name('activity.AddActivityInterface');
        Route::post('/storeactivity','store')->name('storeActivity');
        Route::get('/listactivity', 'show')->name('activity.ViewActivityInterface');
        Route::get('viewactivity/{id}', 'showListActivity')->name('showListActivity');
        Route::get('delete/{id}', 'destroy')->name('destroyActivity');
        Route::post('updateactivity/{id}', 'update')->name('updateactivity');
        Route::get('editActivity/{id}', 'editPage')->name('editActivity');
    });

    Route::controller(App\Http\Controllers\CalendarController::class)->group(function () {
        Route::get('/home/calendar', 'index')->name('calendar.CalendarHomePage');
        Route::get('/add/calendar', 'loadCalendar')->name('calendar.AddCalendarPage');
        Route::post('/store/calendar', 'store')->name('storeC');
        Route::get('/list/calendar', 'show')->name('calendar.ListCalendarPage');
        Route::get('calendarDetails/{id}', 'showCalendar')->name('showCalendar');
        Route::post('update/{id}', 'update')->name('update');
        Route::get('deleteCalendar/{id}', 'destroy')->name('destroyCalendar');

    }); 

 
Route::controller(App\Http\Controllers\ReportController::class)->group(function () {

    Route::get('/home', 'index')->name('report.ReportHomePage');//link to go to reporthomepage
    Route::get('/add', 'create')->name('report.AddProposal');//link to go to add page
    Route::get('/show/{id}', 'App\Http\Controllers\ReportController@show')->name('report.ViewReport');//link to go to show page
    Route::get('/showGenerate/{id}', 'App\Http\Controllers\ReportController@showGenerate')->name('report.ViewGenerate');//link to go to show page
    Route::post('/store', 'store')->name('store');//link to store the data in the database
    Route::get('edit/{id}', 'App\Http\Controllers\ReportController@edit')->name('edit');//link to go to edit page
    Route::put('update/{id}', 'App\Http\Controllers\ReportController@update')->name('update');//link to update the data in the database
    Route::put('updateStatusApproved/{id}', 'App\Http\Controllers\ReportController@updateStatusApproved')->name('updateStatusApproved');//link to update status the data in the database
    Route::put('updateStatusReject/{id}', 'App\Http\Controllers\ReportController@updateStatusReject')->name('updateStatusReject');//link to update status the data in the database
    Route::delete('report/{report}', 'App\Http\Controllers\ReportController@destroy')->name('destroy');//link to delete the data from the database

    Route::get('/report', 'App\Http\Controllers\ReportController@generate')->name('reports.ViewProposal');//link to go to reporthomepage
    Route::post('/generate/{id}', 'App\Http\Controllers\ReportController@storeReport')->name('storeReport');//link to store the data in the database


}); 




// });

    use App\Http\Controllers\BulletinController;
    Route::get('/bookmark', function () {
        return view('ManageBulletin.MyBookmark');
    })->name('bookmark');


    Route::resource('bulletin', BulletinController::class);
    Route::get('filterbycategory', [BulletinController::class,'filterBulletinCategory'])->name('bulletin.filterBulletinCategory'); 
    Route::get('filterbytag', [BulletinController::class,'filterBulletinTag'])->name('bulletin.filterBulletinTag'); 
    Route::get('sort', [BulletinController::class,'sortBulletin'])->name('bulletin.sortBulletin'); 
    Route::get('search', [BulletinController::class,'searchBulletin'])->name('bulletin.searchBulletin'); 




    Route::get('ViewBookmark', [BulletinController::class,'ViewBookmark'])->name('bulletin.ViewBookmark');
    Route::post('AddBookmark/{id}', [BulletinController::class,'AddBookmark'])->name('bulletin.AddBookmark');
    Route::delete('DeleteBookmark/{id}', [BulletinController::class,'DeleteBookmark'])->name('bulletin.DeleteBookmark');
    Route::get('filtercategory', [BulletinController::class,'filterBookmarkCategory'])->name('bulletin.filterBookmarkCategory'); 
    Route::get('filtertag', [BulletinController::class,'filterBookmarkTag'])->name('bulletin.filterBookmarkTag'); 
    Route::get('sorting', [BulletinController::class,'sortBookmark'])->name('bulletin.sortBookmark'); 
    Route::get('searching', [BulletinController::class,'searchBookmark'])->name('bulletin.searchBookmark'); 




