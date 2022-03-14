<?php

use App\Http\Controllers\AdminControllers;
use App\Http\Controllers\AuthentificationController;
use App\Http\Controllers\ClientsControllers;
use App\Http\Controllers\DailyspecialsControllers;
use App\Http\Controllers\ReservationControllers;
use App\Http\Controllers\ViewControllers;
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

// ROUTE POUR LA PAGE D'ACCUEIL
Route::get('/', [ViewControllers::class, 'home'])->name('home');

// PAGE CONNEXION
Route::middleware('user')->group(function () {
});
//  GESTION PLATS DU JOUR (BACK OFFICE) // yes

Route::get('/admin/dailyspecials', [DailyspecialsControllers::class, 'index'])->name('dailyspecials');
Route::post('/admin/dailyspecials', [DailyspecialsControllers::class, 'add']);
Route::post('/admin/dailyspecials/delete/{id}', [DailyspecialsControllers::class, 'delete']);
Route::post('/admin/dailyspecials/{id}', [DailyspecialsControllers::class, 'update']);


// GESTION DES RESERVATIONS (BACK OFFICE) // yes

Route::get('/admin/reservations', [ReservationControllers::class, 'index'])->name('reservations');
Route::post('/admin/reservations', [ReservationControllers::class, 'add']);
Route::post('/admin/reservations/delete/{id}', [ReservationControllers::class, 'delete']);
Route::post('/admin/reservations/{id}', [ReservationControllers::class, 'update']);

Route::post('reservation', [ReservationControllers::class, 'newReservation']);


// GESTION DES CLIENTS (BACK OFFICE) // yes !
Route::get('/admin/clients', [ClientsControllers::class, 'index'])->name('clients');
Route::post('/admin/clients', [ClientsControllers::class, 'add']);
Route::post('/admin/clients/delete/{id}', [ClientsControllers::class, 'delete']);
Route::post('/admin/clients/{id}', [ClientsControllers::class, 'update']);


// PAGE CONNEXION
Route::get('/connexion', [AuthentificationController::class, 'indexConnexion'])->name('connexion');
Route::post('/connexion', [AuthentificationController::class, 'connexion']);

//LOGOUT 
Route::get('/logout', [AuthentificationController::class, 'logout']);

// PAGE D'INSCRIPTION
Route::get('/inscription', [AuthentificationController::class, 'index']);
Route::post('/inscription', [AuthentificationController::class, 'inscription']);


// ESPACE PERSONNEL no
Route::get('/account', [ViewControllers::class, 'account']);

// MENTIONS LEGALES no
Route::get('/legal', [ViewControllers::class, 'legal']);
