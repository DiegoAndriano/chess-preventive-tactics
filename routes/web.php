<?php

use App\Http\Controllers\BeatenController;
use App\Http\Controllers\EasyTacticController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\HardTacticController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MediumTacticController;
use App\Http\Controllers\TacticAnswerController;
use App\Http\Controllers\WonController;
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
Route::get('/easy/{tactic}', [EasyTacticController::class, 'store']);
Route::get('/medium/{tactic}', [MediumTacticController::class, 'store']);
Route::get('/hard/{tactic}', [HardTacticController::class, 'store']);
Route::post('/feedback', [FeedbackController::class, 'store']);
Route::get('/answer/{tactic}', [TacticAnswerController::class, 'index']);
Route::get('/beaten/{tactic}', [BeatenController::class, 'update']);
Route::get('/won/{tactic}', [WonController::class, 'update']);
