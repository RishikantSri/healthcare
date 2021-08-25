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

// Route::get('/', function () {
//     return view('frontend.layouts.app');
// });


Route::get('/', [App\Http\Controllers\GeneralsettingController::class, 'index'])->name('home');
Route::post('/contact', [App\Http\Controllers\GeneralsettingController::class, 'AppointmentStore'])->name('appointment');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
