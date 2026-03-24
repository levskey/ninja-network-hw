<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NinjaController;

Route::get('/', function () {
    return view('welcome');
});

route::post('/logout', [AuthController::class, 'logout'])->name('logout');

route::middleware('guest')->controller(AuthController::class)->group(function(){
route::get('/register', 'showRegister')->name('show.register');
route::get('/login', 'showLogin')->name('show.login');
route::post('/register', 'Register')->name('register');
route::post('/login', 'Login')->name('login');
});


Route::middleware('auth')->controller(NinjaController::class)->group(function (){
Route::get('/ninjas', 'index')->name('ninjas.index');
Route::get('/ninjas/create', 'create')->name('ninjas.create');
Route::get('/ninjas/{ninja}', 'show')->name('ninjas.show');
Route::post('/ninjas', 'store')->name('ninjas.store');
Route::delete('/ninjas/{ninja}', 'destroy')->name('ninjas.destroy');
});
