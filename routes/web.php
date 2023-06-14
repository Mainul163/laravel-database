<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\ClassController;
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

Auth::routes();
Route::get('/students', [App\Http\Controllers\admin\StudentsController::class, 'index'])->name('students');
Route::get('/create', [App\Http\Controllers\admin\StudentsController::class, 'create'])->name('create');
Route::post('/store', [App\Http\Controllers\admin\StudentsController::class, 'store'])->name('store');
Route::get('/delete/{id}', [App\Http\Controllers\admin\StudentsController::class, 'delete'])->name('delete');
Route::get('/edit/{id}', [App\Http\Controllers\admin\StudentsController::class, 'edit'])->name('edit');
Route::post('/name/{id}', [App\Http\Controllers\admin\StudentsController::class, 'editData'])->name('name');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



//* **************** jokhn amra form use korbo tokhn delete method use korbo **********************************

// Route::delete('/delete/{id}', [App\Http\Controllers\admin\StudentsController::class, 'delete'])->name('delete');





// *************************** resource routing *****************************************

 
Route::resource('class', ClassController::class);