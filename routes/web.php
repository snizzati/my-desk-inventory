<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\VehicleController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/inventories', [App\Http\Controllers\InventoryController::class, 'index'])->name('inventories.index');


Route::get('/inventories/create', [InventoryController::class, 'create'])->name('inventories.create');

Route::post('/inventories/create', [InventoryController::class, 'store'])->name('inventories.store');

Route::get('/inventories/{inventory}', [InventoryController::class, 'show'])->name('inventories.show');

Route::get('/inventories/{inventory}/edit', [InventoryController::class, 'edit'])->name('inventories.edit');

Route::post('/inventories/{inventory}/edit', [InventoryController::class, 'update'])->name('inventories.update');

Route::get('/inventories/{inventory}/destroy', [InventoryController::class, 'destroy'])->name('inventories.destroy');


Route::get('/vehicles', [App\Http\Controllers\VehicleController::class, 'index'])->name('vehicles.index');

Route::get('/vehicles/create', [VehicleController::class, 'create'])->name('vehicles.create');

Route::post('/vehicles/create', [VehicleController::class, 'store'])->name('vehicles.store');

Route::get('/vehicles/{vehicle}', [VehicleController::class, 'show'])->name('vehicles.show');

Route::get('/vehicles/{vehicle}/edit', [VehicleController::class, 'edit'])->name('vehicles.edit');

Route::post('/vehicles/{vehicle}/edit', [VehicleController::class, 'update'])->name('vehicles.update');

Route::get('/vehicles/{vehicle}/destroy', [VehicleController::class, 'destroy'])->name('vehicles.destroy');






