<?php

use App\Http\Controllers\Applicant\ProjectController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/* Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard'); */


// registration redirect
Route::get('/checkuser', function () {
    if (Auth::user()->role === 'admin') {
        return redirect()->intended(route('admin', absolute: false));
    }
    if (Auth::user()->role === 'applicant') {
        return redirect()->intended(route('applicant', absolute: false));
    }
})->middleware(['auth'])->name('checkuser');


// login redirect
Route::get('/dashboard', function () {
    if (Auth::user()->role === 'admin') {
        return redirect()->intended(route('admin', absolute: false));
    }
    if (Auth::user()->role === 'applicant') {
        return redirect()->intended(route('applicant', absolute: false));
    }
})->middleware(['auth'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Admin middleware for admin
Route::middleware('admin')->group(function () {
    Route::get('admin', [UserController::class, 'index'])->name('admin');
});
//User or Aplicant middleware for user
Route::middleware('applicant')->group(function () {
    Route::get('applicant', [UserController::class, 'index'])->name('applicant');
    Route::resource('project', ProjectController::class);
});

require __DIR__ . '/auth.php';
