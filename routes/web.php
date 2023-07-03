<?php

use App\Http\Controllers\StudentController;
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

Route::auth(['verify' => true]);
Route::group(['middleware' => ['auth']], function () {
    // define your route, route groups here

    Route::get('/', function () {
        return view('home');
    })->name('home');
    Route::prefix('students')->group(function () {
        Route::get('/',[StudentController::class,'index'])->name('students');
    });
});
