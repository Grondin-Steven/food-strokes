<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminControllers extends Controller
{

    // UTILISATEURS

    public function users() {
        return view('users/users');
    }
}
