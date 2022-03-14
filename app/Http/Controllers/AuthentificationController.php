<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthentificationController extends Controller
{
    function index()
    {
        return view('inscription');
    }

    function inscription(Request $request)
    {

        $validated = $request->validate([
            'email' => 'required',
            'name' => 'required',
            'firstname' => 'required',
            'password' => 'required',
        ]);

        $user = new User();
        $user->email = $validated["email"];
        $user->name = $validated["name"];
        $user->firstname = $validated["firstname"];
        $user->password = Hash::make($validated["password"]);
        $user->save();
        return redirect()->route('connexion');
    }

    function indexConnexion()
    {
        return view('/connexion');
    }

    function connexion(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        
        if (isset($user) && Hash::check($request->password, $user->password)) {
            $request->session()->put('user', $user);
            return redirect('/');
        } else {
            return redirect()->route('connexion');
        }
    }

    function logout(Request $request) {
            $request->session()->forget('user');
            return redirect()->route('home');
    }
}
