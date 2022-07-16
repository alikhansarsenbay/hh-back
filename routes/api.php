<?php

use App\Http\Controllers\v1\CompanyController;
use App\Http\Controllers\v1\VacancyController;
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


Route::get('/companies', [CompanyController::class, 'index']);
Route::get('/companies/{id}', [CompanyController::class, 'show']);
Route::get('/companies/{id}/vacancies', [VacancyController::class, 'show_vacan_company']);
Route::get('/vacancies', [VacancyController::class, 'index']);
Route::get('/vacancies/{id}', [VacancyController::class, 'show']);
Route::get('/vacancies/topten', [VacancyController::class, 'show_top_ten']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


