<?php

use App\Http\Controllers\kursusController;
use App\Http\Controllers\materiController;
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

Route::controller(kursusController::class)->group(function()
{
    Route::get('/', 'index')->name('Kursus');
    Route::post('/kursus', 'store');
    Route::put('/kursus', 'update');
    Route::delete('/kursus', 'destroy');
    Route::get('detail-kursus', 'detailKursus');

    Route::get('/manage-kursus', 'indexAdmin');
});

Route::controller(materiController::class)->group(function()
{
    Route::post('materi', 'store');
    Route::get('detail-materi', 'detail');
    Route::put('materi', 'update');
    Route::delete('materi', 'destroy');
    Route::get('manage-materi', 'indexAdmin');
});
