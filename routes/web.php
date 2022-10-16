<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;

use App\Http\Controllers\UsersController;

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
    return redirect()->action([HomeController::class, 'index']);
});

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/user', [UserController::class, 'index'])->name('user.index');

// Route::get('/user.get_data',[UserController::class, 'get_data'])->name('get_data');
Route::resource('users', UsersController::class);


Route::get('/event-birthday', [EventController::class, 'addGosalaVishnupuramBirthday'])->name('gosala.birthday');
Route::get('/event-gopooja', [EventController::class, 'addGosalaVishnupuramGoPooja'])->name('gosala.gopooja');
Route::get('/event-remembranceday', [EventController::class, 'remembranceDay'])->name('gosala.remembranceday');
Route::get('/event-weddingday', [EventController::class, 'weddingDay'])->name('gosala.weddingday');
Route::post('/add_event', [EventController::class, 'addEvent'])->name('gosala.addevent');
Route::post('/update_event', [EventController::class, 'updateEvent'])->name('gosala.update');
Route::get('/events/{event_type}', [EventController::class, 'getAllEventType'])->name('gosala.event');
Route::get('/eventbyid/{event_id}', [EventController::class, 'getEventById'])->name('gosala.eventid');
Route::delete('events/delete_event/{id}', [EventController::class, 'deleteEvent'])->name('gosala.delete');

Route::get('/ajax_gopooja', [EventController::class, 'ajaxGopooja'])->name('gosala.gopoojaevent');
Route::get('/ajax_birthday', [EventController::class, 'ajaxBirthday'])->name('gosala.gobirthdayevent');
Route::get('/ajax_remembrance', [EventController::class, 'ajaxRemembrance'])->name('gosala.remembranceevent');
Route::get('/ajax_wedding', [EventController::class, 'ajaxWedding'])->name('gosala.weddingevent');





require __DIR__.'/auth.php';
