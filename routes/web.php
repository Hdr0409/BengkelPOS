<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Livewire\Admin\Test as AdminTest;
use App\Livewire\User\Test as UserTest;

//untuk login

Route::get('/', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.store');

Route::post('/logout', [AuthController::class, 'logout'])
    ->name('logout');


//untuk halaman admin

Route::get('/admin/test', function () {
    return view('coba');
})->name('admin.test');

//untuk halaman user

Route::get('/user/coba', function () {
    return view('usercoba');
})->name('mechanic.test');
