<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EpreuveController;
use App\Http\Controllers\MatiereController;

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
    return view('cards');
})->name('cards');


Route::get('/matiere', [MatiereController::class, 'index'])->name('matiere');
Route::get('/matiere/add', [MatiereController::class, 'store'])->name('matiere');
Route::get('/matiere/find', [MatiereController::class, 'findbyidmat']);

Route::get('/epreuve', [EpreuveController::class, 'index'])->name('epreuve');
Route::get('/epreuve/add', [EpreuveController::class, 'store'])->name('epreuve');

Route::get('/insertE', function () {
    return view('epForm');
});
Route::post('/insertE', [EpreuveController::class, 'store']);
