<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\ProposalController;
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


Route::group(['middleware' => ['auth']], function() {
    Route::get('/home', function () {
        return view('home');
    })->name('home');
});

Route::group(['middleware' => ['auth', 'proposal']], function() {
    Route::post('/submit/{job}', [ProposalController::class, 'store'])->name('proposals.store');
});


Route::get('/job', [JobController::class, 'index'])->name('job.index');
Route::get('/job{id}', [JobController::class, 'show'])->name('job.show');
