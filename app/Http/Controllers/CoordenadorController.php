<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\coordenadors;

class CoordenadorController extends Controller
{

    public function coordenadors() {
        $infoCoordenadors = coordenadors::all();
        return view('coordenadors', compact('infoCoordenadors'));
    }
    //
}
