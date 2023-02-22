<?php

use App\Http\Controllers\BankController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/employees/get_code', [EmployeeController::class, 'getCodeAuto']);
Route::put('/employees/duplicate/{id}', [EmployeeController::class, 'duplicateEmployye']);
Route::resource('/employees', EmployeeController::class);
Route::resource('/departments', DepartmentController::class);
Route::resource('/cities', CityController::class);
Route::resource('/banks', BankController::class);
