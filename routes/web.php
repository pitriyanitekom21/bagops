<?php

use Illuminate\Support\Facades\Auth;
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
    return redirect('login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['level:3'])->group(function(){
    Route::get('/form',[App\Http\Controllers\polsekController::class,'form'])->name('form');
    Route::post('/submit',[App\Http\Controllers\polsekController::class,'submit'])->name('submit');
});
Route::middleware(['Bagops'])->group(function(){
    Route::get('/dataBagops', [App\Http\Controllers\bagopsController::class, 'dataBagops'])->name('dataBagops');
    Route::get('/delete/{id}',[\App\Http\Controllers\bagopsController::class, 'delete'])->name('delete');

    Route::get('/dataFeb', [App\Http\Controllers\bagopsController::class, 'dataFeb'])->name('dataFeb');
    Route::get('/deleteFeb/{id}',[\App\Http\Controllers\bagopsController::class, 'deleteFeb'])->name('deleteFeb');

    Route::get('/dataMar', [App\Http\Controllers\bagopsController::class, 'dataMar'])->name('dataMar');
    Route::get('/deleteMar/{id}',[\App\Http\Controllers\bagopsController::class, 'deleteMar'])->name('deleteMar');

    Route::get('/dataAp', [App\Http\Controllers\bagopsController::class, 'dataAp'])->name('dataAp');
    Route::get('/deleteAp/{id}',[\App\Http\Controllers\bagopsController::class, 'deleteAp'])->name('deleteAp');

    Route::get('/dataMei', [App\Http\Controllers\bagopsController::class, 'dataMei'])->name('datamei');
    Route::get('/deleteMei/{id}',[\App\Http\Controllers\bagopsController::class, 'deleteMei'])->name('deleteMei');

    Route::get('/dataJun', [App\Http\Controllers\bagopsController::class, 'dataJun'])->name('dataJun');
    Route::get('/deleteJun/{id}',[\App\Http\Controllers\bagopsController::class, 'deleteJun'])->name('deleteJun');

    Route::get('/dataJul', [App\Http\Controllers\bagopsController::class, 'dataJul'])->name('dataJul');
    Route::get('/deleteJul/{id}',[\App\Http\Controllers\bagopsController::class, 'deleteJul'])->name('deleteJul');

    Route::get('/dataAg', [App\Http\Controllers\bagopsController::class, 'dataAg'])->name('dataAg');
    Route::get('/deleteAg/{id}',[\App\Http\Controllers\bagopsController::class, 'deleteAg'])->name('deleteAg');

    Route::get('/dataSe', [App\Http\Controllers\bagopsController::class, 'dataSe'])->name('dataSe');
    Route::get('/deleteSe/{id}',[\App\Http\Controllers\bagopsController::class, 'deleteSe'])->name('deleteSe');

    Route::get('/dataOk', [App\Http\Controllers\bagopsController::class, 'dataOk'])->name('dataOk');
    Route::get('/deleteOk/{id}',[\App\Http\Controllers\bagopsController::class, 'deleteOk'])->name('deleteOk');

    Route::get('/dataNo', [App\Http\Controllers\bagopsController::class, 'dataNo'])->name('dataNo');
    Route::get('/deleteNo/{id}',[\App\Http\Controllers\bagopsController::class, 'deleteNo'])->name('deleteNo');

    Route::get('/dataDe', [App\Http\Controllers\bagopsController::class, 'dataDe'])->name('dataDe');
    Route::get('/deleteDe/{id}',[\App\Http\Controllers\bagopsController::class, 'deleteDe'])->name('deleteDe');

});
