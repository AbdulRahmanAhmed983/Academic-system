<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsControlller;
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
    return view('auth.login');
});

Auth::routes();
############################################# Begin Route Admin ##########################
Route::get('/index', [StudentsControlller::class,'index'])->name('index');
Route::get('/print-all-data-student/{id}', [StudentsControlller::class,'AllData'])->name('AllData');
Route::get('/print-data-student/{id}', [StudentsControlller::class,'printData'])->name('printData');
Route::get('/Add-Student', [StudentsControlller::class,'addStudents'])->name('AddStudents');
Route::post('/store-Student', [StudentsControlller::class,'StoreStudents'])->name('StoreStudents');
Route::get('/Edit-students/{id}',[StudentsControlller::class,'EditStudents'])->name('EditStudents');
Route::post('/Update-Student/{id}', [StudentsControlller::class,'UpdateStudents'])->name('UpdateStudents');
Route::get('/delete/{id}',[StudentsControlller::class,'delete'])->name('delete');
Route::post('get-department-by-group', [StudentsControlller::class, 'getDepartment']);
Route::post('get-specializes-by-department', [StudentsControlller::class, 'getSpecializes']);
Route::get('/department', [StudentsControlller::class,'getdepartment'])->name('getdepartment');
############################################# Begin Route Admin #################################
