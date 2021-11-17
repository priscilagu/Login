<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/plantilla', [LoginController::class,'plantilla']);

Route::post('/login', [LoginController::class, 'login']); 

Route::get('/plantilla', function () {
    return view('plantilla'); 
});