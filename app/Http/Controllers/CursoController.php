<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\curso;

class CursoController extends Controller
{

    public function curso() {
        $dadosAlunos = curso::all();
        return view('curso', compact('infoCursos'));
    }
    //
}
