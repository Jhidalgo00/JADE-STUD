<?php

use App\Http\Controllers\StudentController;

Route::get('/', [StudentController::class, 'index'])->name('students.index');
Route::resource('students', StudentController::class);

