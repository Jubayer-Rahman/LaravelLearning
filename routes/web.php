<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentCRUDController;


Route::get('/', function () {
    return view('pages.frontend.dashboard');
})->name('dashboard');

Route::get('/dashboard', function () {
    return view('pages.frontend.dashboard');
})->name('dashboard');

Route::get('/signup', function () {
    return view('pages.backend.signup');
})->name('signup');

Route::get('/students', [StudentCRUDController::class, 'index'])->name('students');
Route::post('/students', [StudentCRUDController::class, 'store'])->name('students');
Route::delete('/students/{id}', [StudentCRUDController::class, 'destroy'])->name('students.destroy');
Route::put('/students/{student}', [StudentCRUDController::class, 'update'])->name('students.update');

Route::get('/studentcreate', [StudentCRUDController::class, 'create'])->name('studentcreate');

Route::get('/students/edit/{id}', [StudentCRUDController::class, 'edit'])->name('students.edit');
