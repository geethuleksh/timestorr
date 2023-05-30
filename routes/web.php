<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\userController;
use App\Http\Controllers\userhomeController;


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

Route::get('/admin', [adminController::class, 'admin']);
Route::post('/adminloginaction', [adminController::class, 'adminloginaction']);
Route::get('/adminindex', [adminController::class, 'adminindex']);
Route::get('/viewusers', [adminController::class, 'viewusers']);
Route::get('/clientschedule/{id}', [adminController::class, 'clientschedule']);
Route::post('/clientscheduleaction/{id}', [adminController::class, 'clientscheduleaction']);
Route::get('/finalpage', [adminController::class, 'finalpage']);
Route::get('/meetno', [adminController::class, 'meetno']);
Route::post('/codeaction', [adminController::class, 'codeaction']);
Route::get('/viewclientschedule', [adminController::class, 'viewclientschedule']);
Route::get('/viewmeetedlist', [adminController::class, 'viewmeetedlist']);




Route::get('/userindex', [userController::class, 'userindex']);
Route::get('/register', [userController::class, 'register']);
Route::post('/registeraction', [userController::class, 'registeraction']);
Route::get('/login', [userController::class, 'login']);
Route::post('/userloginaction', [userController::class, 'userloginaction']);
Route::get('/meetedlist', [userController::class, 'meetedlist']);
Route::post('/codeaction', [userController::class, 'codeaction']);





Route::get('/userhome', [userhomeController::class, 'userhome']);
Route::get('/viewmyprofile', [userhomeController::class, 'viewmyprofile']);
Route::post('/myprofileaction/{id}', [userhomeController::class, 'myprofileaction']);
Route::get('/userscheduleview', [userhomeController::class, 'userscheduleview']);
