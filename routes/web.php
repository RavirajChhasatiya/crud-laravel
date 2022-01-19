<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\employeeController;
use App\Http\Controllers\Edepartment;
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
//     return view('welcome');
// });
Route::get('/',[employeeController::class,'allemployees']);
Route::post('/welcome',[employeeController::class,'addemployee'])->name('insert');


// Route::get('/update/{id}'[employeeController::class,'addemployee'])->name('insert');

Route::post('/department',[Edepartment::class,'deptadd'])->name('deptinsert');
Route::get('/department',[Edepartment::class,'views']);
