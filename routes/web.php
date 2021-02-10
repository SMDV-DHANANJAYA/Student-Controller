<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

Route::view('/', 'welcome');

Route::post('/saveStudent',[StudentController::class,'saveStudent']);

Route::get('/deleteStudent/{id}',[StudentController::class,'deleteStudent']);

Route::get('/update/{id}',[StudentController::class,'update']);

Route::post('/updateStudent',[StudentController::class,'updateStudent']);
