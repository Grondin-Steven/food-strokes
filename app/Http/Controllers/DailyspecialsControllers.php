<?php

namespace App\Http\Controllers;

use App\Models\DailyspecialsModel;
use Illuminate\Http\Request;

class DailyspecialsControllers extends Controller
{
    function index()
    {
        $dailyspecials = DailyspecialsModel::get();
        return view('dailyspecials/dailyspecials', ['dailyspecials' => $dailyspecials]);
    }

    function add(Request $request)
    {
        $dailyspecials = new DailyspecialsModel();
        $dailyspecials->title = $request->title;
        $dailyspecials->description = $request->description;
        $dailyspecials->picture = $request->picture;
        $dailyspecials->save();
        return redirect()->route('dailyspecials');
    }

    function update(Request $request, $id)
    {

        $plat = DailyspecialsModel::find($id);
        if (isset($plat)) {

            $plat->title = $request->title;
            $plat->description = $request->description;
            $plat->picture = $request->picture;
            $plat->save();
            return redirect()->route('dailyspecials');
        } else {
            return 'toto';
        }
    }

    function delete($id)
    {
        DailyspecialsModel::destroy($id);
        return redirect()->route('dailyspecials');
    }
}
