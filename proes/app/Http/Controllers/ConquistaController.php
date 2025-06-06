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
        $usuario = Auth::user()->load('conquistas');

        $idsConquistasUsuario = $usuario->conquistas->pluck('id')->toArray();

        $conquistas = Conquista::all();

        $conquistasAlcancadas = $usuario->conquistas;
        $conquistasNaoAlcancadas = $conquistas->whereNotIn('id', $idsConquistasUsuario);

        return view('conquistas.index', compact('usuario', 'conquistasAlcancadas', 'conquistasNaoAlcancadas'));
    }
}
