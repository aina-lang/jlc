<?php

use App\Http\Controllers\auth\ClientAuthController;
use Illuminate\Support\Facades\Route;


// ROUTES POUR GERER L'AUTHENTIFICATION
Route::get("login/", function () {
     if (Auth::guard('client')->check()) {
        // Rediriger l'utilisateur déjà connecté
        return redirect()->route('telepro.index');
    }
    return view('public.login');
})->name('login');

Route::post("login/", [ClientAuthController::class, "login"])->name("login.client");

Route::post("register/", [ClientAuthController::class, "register"])->name("register.client");




















Route::get('/', function () {
    return view('welcome');
});


Route::middleware(['auth:client'])->group(function () {
    Route::get('telepro/dashboard', function () {
        return view('telepro.index');
    })->name('telepro.index');
});

Route::get('telepro/form', function () {
    return view('telepro.forms');
});

Route::get('tables', function () {
    return view('telepro.tables');
});



Route::get('register', function () {
    return view('public.register');
});

Route::get('apointment/telepros', function () {
    return view('public.apointment');
});

Route::get('apointment/telepro/check', function () {
    return view('public.viewTelepro');
});
