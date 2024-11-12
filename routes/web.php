<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvenController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;


Route::get('/', function () {
    return view('welcome');
});

//Login
Route::get('/login', [LoginController::class, 'index'])->name('login') -> middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

//logout
Route::post('/logout', [LoginController::class, 'logout']);

//Register
Route::get('/register', [RegisterController::class, 'create']) -> middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::middleware(['auth'])->group(function(){
    Route::get('/dashboard', function () {
        return view('manajerS/dashboard',['title'=>'dashboard']);
    });
    Route::resource('/inven-k4',InvenController::class);
    
    // Route::get('/inventoryk4', function () {
    //     return view('manajerS/inven-k4',['title'=>'Inventroy K4']);
    // });
    Route::get('/monitoring', function () {
        return view('manajerS/monitoring',['title'=>'Monitoring']);
    });
});


