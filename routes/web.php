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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/trucks/index',[TruckController::class, 'index'])->name('trucks.index');
Route::get('/trucks/vehicles/index',[TruckController::class, 'indexVehicles'])->name('trucks.vehicles.index');
Route::post('/trucks/create',[TruckController::class, 'createVehicleType'])->name('trucks.create');
Route::get('/dashboard/index',[DashboardController::class, 'index'])->name('dashboard.index');
