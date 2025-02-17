<?php

use App\Http\Controllers\Api\SpareSpartController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\CarModelController;
use App\Http\Controllers\MaintenanceJobController;
use App\Http\Controllers\ScheduledMaintenanceJobController;
use App\Http\Controllers\TimeSlotController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('cars', CarController::class);
Route::resource('car_models', CarModelController::class);
Route::resource('maintenance_jobs', MaintenanceJobController::class);
Route::resource('scheduled_maintenance_jobs', ScheduledMaintenanceJobController::class);
Route::resource('spare_parts', SpareSpartController::class);
Route::resource('time_slot', TimeSlotController::class);