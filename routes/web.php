<?php

use App\Http\Controllers\PostForm;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::view('/about','about');
Route::get('/postform',[PostForm::class,'show'])->name('show');
Route::post('/submitform',[PostForm::class,'store'])->name('save');


Route::controller(StudentController::class)->group(function()
{
    Route::get('/studentadd','add');
Route::get('/studentsort','sort');


});