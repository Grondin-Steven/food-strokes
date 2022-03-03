<?php

use App\Http\Controllers\AdminControllers;
use App\Http\Controllers\DailyspecialsControllers;
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



                //           FRONT OFFICE             //


// ROUTE POUR LA PAGE D'ACCUEIL
Route::get('/', [ViewControllers::class, 'home']);

// PAGE CONNEXION
Route::get('/connexion',[ViewControllers::class, 'connexion'] );

// PAGE D'INSCRIPTION

Route::get('/registration',[ViewControllers::class, 'registration'] );

// ESPACE PERSONNEL
Route::get('/account',[ViewControllers::class, 'account'] );

// MENTIONS LEGALES
Route::get('/legal',[ViewControllers::class, 'legal'] );


                //           BACK OFFICE            //


    // GESTION DES UTILISATEURS //

Route::get('/admin/users',[AdminControllers::class, 'users'] );

// CREATE
Route::get('/admin/users/create', function () {
    return view('users/create');
});
Route::get('/admin/users/create',[AdminControllers::class, 'usersCreate'] );

//READ
Route::get('/admin/users/read',[AdminControllers::class, 'usersRead'] );

//UPDATE
Route::get('/admin/users/update',[AdminControllers::class, 'usersUpdate'] );

//DELETE
Route::get('/admin/users/delete',[AdminControllers::class, 'usersDelete'] );


    // GESTION DES RESERVATIONS //

Route::get('/admin/reservation',[AdminControllers::class, 'reservation'] );

// CREATE
Route::get('/admin/reservation/create',[AdminControllers::class, 'reservationCreate'] );

// READ
Route::get('/admin/reservation/read',[AdminControllers::class, 'reservationRead'] );

// UPDATE
Route::get('/admin/reservation/update',[AdminControllers::class, 'reservationUpdate'] );

// DELETE

Route::get('/admin/reservation/delete',[AdminControllers::class, 'reservationDelete'] );

    // GESTION DES PLATS DU JOUR //

Route::get('/admin/dailyspecials',[DailyspecialsControllers::class, 'index'] );