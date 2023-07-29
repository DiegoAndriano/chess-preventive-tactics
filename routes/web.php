<?php

use App\Http\Controllers\DislikeTacticController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LikeTacticController;
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

Route::get('/', [HomeController::class, 'index']);
Route::post('/like/{tactic}', [LikeTacticController::class, 'store']);
Route::post('/dislike/{tactic}', [DislikeTacticController::class, 'store']);
