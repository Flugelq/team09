<?php

use App\Http\Controllers\SurveyStatisticsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('guide');
});

Route::get('SurveyStatistics', [SurveyStatisticsController::class, 'index']);
Route::get('SurveyStatistics/{id}', [SurveyStatisticsController::class, 'show'])->where('id', '[0-9]+')->name('Statistics.show');
Route::get('SurveyStatistics/{id}/edit', [SurveyStatisticsController::class, 'edit'])->where('id', '[0-9]+')->name('Statistics.edit');
Route::delete('SurveyStatistics/delete/{id}', [SurveyStatisticsController::class, 'destroy'])->where('id', '[0-9]+')->name('Statistics.destroy');
Route::get('SurveyStatistics/create', [SurveyStatisticsController::class, 'create'])->name('Statistics.create');
Route::post('SurveyStatistics/store', [SurveyStatisticsController::class, 'store'])->name('Statistics.store');