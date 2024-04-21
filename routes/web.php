<?php

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

Route::get("students",[StudentController::class, "index"])->name("students.index");
Route::post("students",[StudentController::class, "store"])->name("students.store");
Route::get("students/create",[StudentController::class, "create"])->name("students.create");
Route::get("students/{student}",[StudentController::class, "show"])->name("students.show");
Route::patch("students/{student}",[StudentController::class, "update"])->name("students.update");
Route::delete("students/{student}",[StudentController::class, "destroy"])->name("students.destroy");
Route::get("students/{student}/edit",[StudentController::class, "edit"])->name("students.edit");