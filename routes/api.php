<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\EventController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::prefix('v1')->group(function () {
    Route::post('login', [LoginController::class, 'login']);
    Route::post('register', [LoginController::class, 'register']);

    Route::middleware('auth:api')->group(function () {
        Route::get('hii', function(){
            echo "Hello";
        });
        
        Route::post('/add_event', [EventController::class, 'updateEvent'])->name('gosala.addeventapi');
        Route::post('/get_detail', [EventController::class, 'detailEvent'])->name('gosala.getdetail');
        Route::post('/all-events/{event_type}', [EventController::class, 'allEvents'])->name('gosala.allevents');
        Route::post('/all_upcoming', [EventController::class, 'upcomingEvent'])->name('gosala.upcoming');
    });
});
