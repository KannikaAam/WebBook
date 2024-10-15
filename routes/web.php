<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackendController; // เพิ่มบรรทัดนี้เพื่อเรียกใช้คลาส BackendController
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('index');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('backend');
    })->name('dashboard');

    Route::get('/profile', function () {
        return view('profile');
    })->name('profile');

    Route::get('/userdata', function () {
        return view('userdata');
    })->name('userdata');

    Route::get('/adduser', function () {
        return view('adduser');
    })->name('adduser');

    Route::get('/edituser/{id}', function ($id) {
        return view('edituser', compact('id'));
    })->name('edituser');

    Route::get('/backend', [BackendController::class, 'index'])->name('backend'); // ใช้ BackendController

    Route::get('/viewuser/{id}', [UserController::class, 'show'])->name('viewuser');

});
