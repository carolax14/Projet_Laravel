<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VisiteurController;

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

Route::get('/visiteurs/liste', [VisiteurController::class, 'index']);
Route::post('/visiteurs/ajout', [VisiteurController::class, 'store']);
Route::get('/visiteurs/ajout', [VisiteurController::class, 'create']);
Route::get('/visiteurs/{visiteur}/modif', [VisiteurController::class, 'edit']);
Route::post('/visiteurs/liste', [VisiteurController::class, 'update']);
/* Route::get('/visiteurs/delete/{visiteur}', [VisiteurController::class, 'destroy']); */
