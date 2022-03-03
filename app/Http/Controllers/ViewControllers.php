<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewControllers extends Controller
{
    public function home() {
        return view('home');
    }

    public function connexion() {
        return view('connexion');
    }

    public function registration() {
        return view('registration');
    }

    public function account() {
        return view('account');
    }

    public function legal() {
        return view('legal');
    }
}
