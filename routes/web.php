<?php

use App\Http\Controllers\InvenController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

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

