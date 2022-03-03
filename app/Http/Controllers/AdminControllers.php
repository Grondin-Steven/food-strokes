<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminControllers extends Controller
{

    // UTILISATEURS

    public function users() {
        return view('users/users');
    }

    public function usersCreate() {
        return view('users/users');
    }

    public function usersRead() {
        return view('users/read');
    }

    public function usersUpdate() {
        return view('users/update');
    }

    public function usersDelete() {
        return view('users/delete');
    }

    // RESERVATION

    public function reservation() {
        return view('reservation/reservation');
    }

    public function reservationCreate() {
        return view('reservation/create');
    }

    public function reservationRead() {
        return view('reservation/read');
    }

    public function reservationUpdate() {
        return view('reservation/update');
    }

    public function reservationDelete() {
        return view('reservation/delete');
    }

    // PLATS DU JOUR
}
