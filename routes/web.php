<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SensorController;

Route::get('/', [SensorController::class, 'index'])->name('sensor.index');
Route::get('/sensor/create', [SensorController::class, 'create'])->name('sensor.create');
Route::post('/sensor', [SensorController::class, 'store'])->name('sensor.store');
Route::get('/sensor/{sensor}/edit', [SensorController::class, 'edit'])->name('sensor.edit');
Route::put('/sensor/{sensor}', [SensorController::class, 'update'])->name('sensor.update');
Route::delete('/sensor/{sensor}', [SensorController::class, 'destroy'])->name('sensor.destroy');


use App\Http\Controllers\DeviceController;

Route::get('/device', [DeviceController::class, 'index'])->name('device.index');
Route::post('/device', [DeviceController::class, 'store'])->name('device.store');
Route::delete('/device/{device}', [DeviceController::class, 'destroy'])->name('device.destroy');
Route::put('/device/{device}', [DeviceController::class, 'update'])->name('device.update');

Route::get('/device/{device}/edit', [DeviceController::class, 'edit'])->name('device.edit');
Route::put('/device/{device}', [DeviceController::class, 'update'])->name('device.update');
// Route::get('/', function () {
//     return view('welcome');
// });
