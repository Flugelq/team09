<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SurveyStatisticsController;

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
    return view('SDG_index');
});
Route::get('SurveyStatistcs' , [SurveyStatisticsController::class, 'index']);
Route::get('SurveyStatistcs/{id}' , [SurveyStatisticsController::class, 'show'])->where('id', '[0-9]+')->name('Statistics.show');
Route::get('SurveyStatistcs/{id}/edit', [SurveyStatisticsController::class, 'edit'])->where('id', '[0-9]+')->name('Statistics.edit');
Route::delete('SurveyStatistcs/delete/{id}', [SurveyStatisticsController::class, 'destroy'])->where('id', '[0-9]+')->name('Statistics.destroy');
Route::get('SurveyStatistcs/create', [SurveyStatisticsController::class, 'create'])->name('Statistics.create');
Route::post('SurveyStatistcs/store', [SurveyStatisticsController::class, 'store'])->name('Statistics.store');