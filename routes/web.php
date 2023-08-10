<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [TeamController::class, 'index']);
Route::get('/teams/{id}', [TeamController::class, 'show']);
Route::get('/players/{id}', [PlayerController::class, 'show']);

Route::get('/register', [AuthController::class, 'showRegisterPage']);
Route::get('/login', [AuthController::class, 'showLoginPage']);

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);
Route::post('/createcomment', [CommentsController::class, 'store'])->middleware('isAuth');

Route::get('/forbidden', [CommentsController::class, 'show']);
Route::get('/verify_email/{id}', [AuthController::class, 'validation']);

//

//
/* Route::group(['middleware' => ['auth']], function () {
    Route::get('/email/verify', 'VerificationController@show')->name('verification.notice');
    Route::get('/email/verify/{id}/{hash}', 'VerificationController@verify')
        ->name('verification.verify')
        ->middleware(['signed']);
    Route::post('/email/resend', 'VerificationController@resend')->name('verification.resend');
}); */
//Auth::routes(['verify' => true]);
