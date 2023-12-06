<?php

use App\Http\Controllers\Api\BpsController;
use App\Http\Controllers\Api\IndonesiaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(BpsController::class)->group(function () {
    Route::get('provinces', 'getProvinces')->name('provinces');
    Route::get('regencies', 'getRegencies')->name('regencies');
    Route::get('districts', 'getDistricts')->name('districts');
});

Route::controller(IndonesiaController::class)->prefix('indonesia')->as('indonesia.')->group(function(){
    Route::get('search-province', 'searchProvince')->name('search-province');
    Route::get('search-regency', 'searchRegency')->name('search-regency');
    Route::get('search-district', 'searchDistrict')->name('search-district');
    Route::get('search-global', 'searchGlobal')->name('search-global');
});