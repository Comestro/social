<?php

use Illuminate\Support\Facades\Route;

// auth components
use App\Livewire\Auth\Register;
use App\Livewire\Auth\Login;
use Illuminate\Support\Facades\Auth;
use App\Livewire\User\FindFriends;

// user components
use App\Livewire\User\Dashboard;
use App\Livewire\User\Profile;


Route::middleware(['guest'])->group(function () {
    Route::get("/register", Register::class)->name("register"); 
    Route::get("/", Login::class)->name("login");
    
});




Route::middleware(['auth'])->group(function () {
    Route::get("/dashboard", Dashboard::class)->name("dashboard");
    Route::get("/profile/{id?}", Profile::class)->name("profile");
    Route::get("/find", FindFriends::class)->name("find.friends");
    Route::post("/logout", function () {
        Auth::logout();
        return redirect()->route("login");
    })->name("logout");
});