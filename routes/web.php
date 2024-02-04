<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;


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

Route::get('/jobs', [MainController::class, 'index']);
Route::get('/getJobs', [MainController::class, 'getJobs']);

Route::get('/getStream/{jobId}', [MainController::class, 'getStream']); 
Route::get('/getSubject/{courseId}', [MainController::class, 'getSubject']); 
Route::get('/getOLSubject/{subjectId}', [MainController::class, 'getOrdinaryLevelSubject']);
