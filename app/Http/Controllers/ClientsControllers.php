<?php

namespace App\Http\Controllers;

use App\Models\ClientModel;
use Illuminate\Http\Request;

class ClientsControllers extends Controller
{
    function index()
    {
        $clients = ClientModel::get();
        return view('clients/clients', ['clients' => $clients]);
    }

    function add(Request $request)
    {
        $clients = new ClientModel();
        $clients->res_name = $request->name;
        $clients->res_email = $request->email;
        $clients->res_phone = $request->phone;
        $clients->save();
        return redirect()->route('clients');
    }

    function update(Request $request, $id)
    {

        $clie = ClientModel::find($id);
        if (isset($clie)) {

            $clie->res_name = $request->name;
            $clie->res_email = $request->email;
            $clie->res_phone = $request->phone;
            $clie->save();
            return redirect()->route('clients');
        } else {
            return 'toto';
        }
    }

    function delete($id)
    {
        ClientModel::destroy($id);
        return redirect()->route('clients');
    }
}
