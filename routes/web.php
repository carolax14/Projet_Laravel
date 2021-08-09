<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VisiteurController;
use App\Http\Controllers\OrdinateurController;
use App\Http\Controllers\ReservationController;
use Faker\Guesser\Name;

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
    return view('welcome');
});


/***** VISITEURS *****/

Route::resource('visiteurs', VisiteurController::class);
Route::get('visiteurs.liste', [VisiteurController::class, 'index'])->name('visiteurs.liste');
Route::get('visiteurs.ajout', [VisiteurController::class, 'create'])->name('visiteurs.ajout');
Route::post('visiteurs.ajout', [VisiteurController::class, 'store'])->name('visiteurs.ajout');
Route::get('visiteurs.modif/{id}/edit', [VisiteurController::class, 'edit'])->name('visiteurs.edit');
Route::patch('visiteurs.liste/{id}', [VisiteurController::class, 'update'])->name('visiteurs.update');
Route::delete('visiteurs.liste/{id}', [VisiteurController::class, 'destroy'])->name('visiteurs.delete');


/***** ORDINATEURS *****/
Route::resource('ordinateurs', OrdinateurController::class);
Route::get('ordinateurs.liste', [OrdinateurController::class, 'index'])->name('ordinateurs.liste');
Route::get('ordinateurs.ajout', [OrdinateurController::class, 'create'])->name('ordinateurs.ajout');
Route::post('ordinateurs.ajout', [OrdinateurController::class, 'store'])->name('ordinateurs.ajout');
Route::get('ordinateurs.modif/{id}/edit', [OrdinateurController::class, 'edit'])->name('ordinateurs.edit');
Route::patch('ordinateurs.liste/{id}', [OrdinateurController::class, 'update'])->name('ordinateurs.update');
Route::delete('ordinateurs.liste/{id}', [OrdinateurController::class, 'destroy'])->name('ordinateurs.delete');


/***** RESERVATIONS *****/
Route::resource('reservations', ReservationController::class);
Route::get('reservations.liste', [ReservationController::class, 'index'])->name('reservations.liste');
Route::post('reservations.liste', [ReservationController::class, 'store'])->name('reservations.ajout');
Route::delete('reservations.liste/{id}', [ReservationController::class, 'destroy'])->name('reservations.delete');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
