<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\FamilyController;
use App\Http\Controllers\LandController;
use App\Http\Controllers\PlantController;
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


Route::resource('/family',FamilyController::class);
Route::resource('/address',AddressController::class);
Route::resource('/plant',PlantController::class);
Route::resource('/land',LandController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::get('addLandToFamily/{id}', 
[LandController::class, 'create']
);
Route::get('showFamilyLands/{id}', 
[LandController::class, 'index']
);
