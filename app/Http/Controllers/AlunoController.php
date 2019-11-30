<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\alunos;

class AlunoController extends Controller
{

    public function alunos() {
        $infoAlunos = alunos::all();
        return view('alunos', compact('infoAlunos'));
    }
    //
}
