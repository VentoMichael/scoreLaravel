<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\MatchController;
use App\Http\Controllers\TeamController;
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

Route::get('/', [DashboardController::class,'index']);

Route::get('matches/create', [MatchController::class,'create'])
    ->name('new_match')
    ->middleware('auth');

Route::post('match/', [MatchController::class,'store'])
    ->name('store_match')
    ->middleware('auth');

Route::get('teams/create', [TeamController::class,'create'])
    ->name('new_team')
    ->middleware('auth');

Route::post('team/', [TeamController::class,'store'])
    ->name('store_team')
    ->middleware('auth');

