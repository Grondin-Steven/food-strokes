<?php

namespace App\Http\Controllers;

use App\Models\ClientModel;
use App\Models\ReservationModel;
use Illuminate\Http\Request;

class ReservationControllers extends Controller
{
    function newReservation(Request $request) {

        $client = new ClientModel();
        $client->res_name=$request->input("name");
        $client->res_email=$request->input("email");
        $client->res_phone=$request->input("tel");
        $client->save();


        $reservation = new ReservationModel();
        $reservation->res_date=$request->input("date");
        $reservation->res_time=$request->input("time");
        $reservation->res_people=$request->input("people");
        $reservation->id_client=$client->id;
        $reservation->save();
        return redirect()->route('home');
    }

    function index()
    {
        $reservation = ReservationModel::get();
        return view('reservations/reservations', ['reservation' => $reservation]);
    }

    function add(Request $request)
    {
        $reservation = new ReservationModel();
        $reservation->res_date = $request->date;
        $reservation->res_time = $request->time;
        $reservation->res_people = $request->people;
        $reservation->save();
        return redirect()->route('reservations');
    }

    function update(Request $request, $id)
    {

        $res = ReservationModel::find($id);
        if (isset($res)) {

            $res->res_date = $request->date;
            $res->res_time = $request->time;
            $res->res_people = $request->people;
            $res->save();
            return redirect()->route('reservations');
        } else {
            return 'toto';
        }
    }

    function delete($id)
    {
        ReservationModel::destroy($id);
        return redirect()->route('reservations');
    }

}
