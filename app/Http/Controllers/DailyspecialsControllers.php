<?php

namespace App\Http\Controllers;

use App\Models\DailyspecialsModel;
use Illuminate\Http\Request;

class DailyspecialsControllers extends Controller
{
    function index()
    {
        $dailyspecials = DailyspecialsModel::get();
        return view('dailyspecials/dailyspecials', ['dailyspecials'=>$dailyspecials]);
    }
}
