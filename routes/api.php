<?php

use App\Http\Controllers\AnimalController;
use Illuminate\Support\Facades\Route;

Route::get('animales', [AnimalController::class, 'index']);
Route::post('animales', [AnimalController::class, 'store']);
Route::get('animales/{animal}', [AnimalController::class, 'show'])->whereNumber('animal');
Route::put('animales/{animal}', [AnimalController::class, 'update'])->whereNumber('animal');
Route::delete('animales/{animal}', [AnimalController::class, 'destroy'])->whereNumber('animal');
