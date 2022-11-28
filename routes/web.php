<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EpreuveController;
use App\Http\Controllers\MatiereController;
use App\Http\Controllers\MatiererController;

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


Route::get('/epreuve', [EpreuveController::class, 'index'])->name('epreuve');


Route::get('/insertE', [EpreuveController::class, 'list'], function () {
    return view('epForm');
});
Route::get('/insertM', function () {
    return view('matForm');
})->name('matForm');
/*
Route::post('/insertE', [EpreuveController::class, 'store']);
Route::post('/insertM', [MatiereController::class, 'store']);
*/
Route::resource('contacts', ContactController::class);
Route::resource('matierees', MatiererController::class);
