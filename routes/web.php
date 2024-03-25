<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TruckController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [DashboardController::class, 'index']);



Route::get('/trucks/index',[TruckController::class, 'index'])->name('trucks.index');
Route::get('/trucks/vehicles/index',[TruckController::class, 'indexVehicles'])->name('trucks.vehicles.index');
Route::post('/trucks/create',[TruckController::class, 'createVehicleType'])->name('trucks.create');
Route::get('/trucks/vehicles/register',[TruckController::class, 'register'])->name('trucks.vehicles.register');



Route::get('/trucks/driver/register',[TruckController::class, 'driverRoute'])->name('trucks.driver.register');
Route::post('/trucks/driver/store',[TruckController::class, 'driverStore'])->name('trucks.driver.store');
Route::get('/users/driver/index',[TruckController::class, 'indexDrivers'])->name('users.driver.index');
Route::get('/users/driver/add',[TruckController::class, 'driverRoute'])->name('users.driver.add');
Route::get('/trucks/drivers/info/{id}',[TruckController::class, 'driverInfo'])->name('trucks.drivers.info');

Route::post('/trucks/vehicles/store',[TruckController::class, 'store'])->name('trucks.vehicles.store');
Route::get('/trucks/vehicles/advanceDetails/{id}',[TruckController::class, 'routetoAdvanceDetails'])->name('trucks.vehicles.advanceDetails');
Route::get('/trucks/vehicles/info/{id}',[TruckController::class, 'routetoVehicleDetails'])->name('trucks.vehicles.info');
Route::post('/trucks/vehicles/advanceDetailsStore',[TruckController::class, 'registerAdvanceDetails'])->name('trucks.vehicles.advanceDetailsStore');
Route::get('/trucks/vehicles/advanceDetailsforAll',[TruckController::class, 'registerAdvanceDetailsforAll'])->name('trucks.vehicles.advanceDetailsforAll');
Route::post('/trucks/upload',[TruckController::class, 'storeFile']);
Route::get('/dashboard/index',[DashboardController::class, 'index'])->name('dashboard.index');
Route::get('/trip/index',[TruckController::class, 'indexTrip'])->name('trip.index');
