<?php

use App\Http\Controllers\CrudController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [CrudController::class, 'index'])->name('index');

Route::get('/about', function() {
    return view('about');
});

Route::post('form', [CrudController::class, 'store']);

Route::get('/seeUser/{user}', [CrudController::class, 'show']);

Route::post('/delete/{user}', [CrudController::class, 'delete']);