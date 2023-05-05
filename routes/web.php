<?php

use App\Http\Controllers\UsersController;
use App\Http\Controllers\CalendarController;
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

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/matkul', function () {
    return view('pages.matkul');
});

Route::get('matkul/materi', function () {
    return view('pages.materi');
});

Route::get('matkul/materi/tugas', function () {
    return view('pages.tugas');
});


//Route dari CalendarController
Route::resource('calendar', CalendarController::class);

//Route dari UserController
Route::resource('users', UsersController::class);
