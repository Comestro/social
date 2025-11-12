<?php

use Illuminate\Support\Facades\Route;

// auth components
use App\Livewire\Auth\Register;
use App\Livewire\Auth\Login;
use Illuminate\Support\Facades\Auth;

// user components
use App\Livewire\User\Dashboard;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware(['guest'])->group(function () {
    Route::get("/register", Register::class)->name("register"); 
    Route::get("/login", Login::class)->name("login");
    Route::get("/logout", function () {
        Auth::logout();
        return redirect()->route("login");
    })->name("logout");
});


Route::middleware(['auth'])->group(function () {
    Route::get("/dashboard", Dashboard::class)->name("dashboard");
});