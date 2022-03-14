<?php

namespace App\Http\Controllers;

use App\Models\DailyspecialsModel;
use Illuminate\Http\Request;

class ViewControllers extends Controller
{
    public function home(Request $request)
    {
        $dailyspecials = DailyspecialsModel::get();
        return view('home', ["user"=>$request->session()->get("user")], ['dailyspecials' => $dailyspecials]);
    }

    public function registration(Request $request)
    {
        return view('registration', ["user"=>$request->session()->get("user")]);
    }

    public function account()
    {
        return view('account');
    }

    public function legal()
    {
        return view('legal');
    }
}
