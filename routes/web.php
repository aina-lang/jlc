<?php

use App\Http\Controllers\auth\ClientAuthController;
use Illuminate\Support\Facades\Route;


// ROUTES POUR GERER L'AUTHENTIFICATION
Route::get("login/", function () {
    return view('public.login');
});

Route::post("login/",[ClientAuthController::class,"login"])->name("login.client");




















Route::get('/', function () {
    return view('welcome');
});


Route::get('telepro/', function () {
    return view('telepro.index');
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
