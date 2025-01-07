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
Route::get('SurveyStatistics/{id}/edit', [SurveyStatisticsController::class, 'edit'])->where('id', '[0-9]+')->name('Statistics.edit')->middleware('can:admin-forest');
Route::patch('SurveyStatistics/update/{id}', [SurveyStatisticsController::class, 'update'])->where('id', '[0-9]+')->name('Statistics.update');
Route::delete('SurveyStatistics/delete/{id}', [SurveyStatisticsController::class, 'destroy'])->where('id', '[0-9]+')->name('Statistics.destroy')->middleware('can:admin');
Route::get('SurveyStatistics/create', [SurveyStatisticsController::class, 'create'])->name('Statistics.create')->middleware('can:admin');
Route::post('SurveyStatistics/store', [SurveyStatisticsController::class, 'store'])->name('Statistics.store');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
