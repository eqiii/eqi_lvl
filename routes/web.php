<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SensorController;

Route::get('/', [SensorController::class, 'index'])->name('sensor.index');
Route::get('/sensor/create', [SensorController::class, 'create'])->name('sensor.create');
Route::post('/sensor', [SensorController::class, 'store'])->name('sensor.store');
Route::get('/sensor/{sensor}/edit', [SensorController::class, 'edit'])->name('sensor.edit');
Route::put('/sensor/{sensor}', [SensorController::class, 'update'])->name('sensor.update');
Route::delete('/sensor/{sensor}', [SensorController::class, 'destroy'])->name('sensor.destroy');


// Route::get('/', function () {
//     return view('welcome');
// });
