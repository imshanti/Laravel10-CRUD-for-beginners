<?php

use App\Http\Controllers\FeeController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Models\Student;
use App\Models\fee;
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



Route::get('/',[StudentController::class,'index']);
Route::get('/form', function () {
    return view('form');
});
// Route::get('/', function () {
   
//     $student=Student::all()->sortByDesc('id');
//     return view('table',compact('student'));
// });




Route::POST('student-store',[StudentController::class,'store']);
Route::any('student.delete/{id}',[StudentController::class,'destroy']);
Route::get('edit/{id}',[StudentController::class,'edit']);
Route::put('update/{id}',[StudentController::class,'update']);
Route::get('details/{id}',[StudentController::class,'show']);



//fee related


Route::get('/fee', function () {
    return view('fee');
});


Route::get('fee_table',[FeeController::class,'index']);
Route::POST('student-fee',[FeeController::class,'store']);
Route::any('fee.delete/{id}',[FeeController::class,'destroy']);
Route::get('/fee_edit/{id}',[FeeController::class,'edit']);

Route::put('/fee_edit/{id}',[FeeController::class,'update']);