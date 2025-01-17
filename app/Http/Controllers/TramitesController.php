<?php

namespace App\Http\Controllers;
use App\Models\Tramites;

use Illuminate\Http\Request;

class TramitesController extends Controller
{
    public function index()
    {
        return view('tramites');
    }

    public function busqueda(Request $request)
    {
        $tramites_query = Tramites::query();

        $busqueda_parametro = $request->texto;

        if ($busqueda_parametro) {
            $tramites_query = Tramites::search($busqueda_parametro);
        }

        $tramites = $tramites_query->get();

        return response()->json(['resultado' => $tramites]);
    }

}
