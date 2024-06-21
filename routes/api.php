<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserCourseController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TagController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/userCourse/all', [UserCourseController::class, 'index']);
Route::get('/events/all', [EventController::class, 'index']);
Route::get('/usersAdmin/all', [UserController::class, 'index']);
Route::get('/tags/all', [TagController::class, 'index']);
//Route::get('/listUserCourse/{id}', [UserCourseController::class, 'show']);
