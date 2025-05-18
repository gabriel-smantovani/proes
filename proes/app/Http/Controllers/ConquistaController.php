<?php

namespace App\Http\Controllers;

use App\Models\UsuarioConquista;
use App\Models\Conquista;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConquistaController extends Controller
{
    public function index()
    {
        $usuario = Auth::user();
        $conquistas = $usuario->conquistas;

        return view('conquistas.index', compact('conquistas'));
    }
}
