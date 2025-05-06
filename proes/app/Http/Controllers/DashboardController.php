<?php

namespace App\Http\Controllers;

use App\Models\ResultadoFase;
use App\Models\UsuarioConquista;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $usuario = Auth::user();
        $resultadofase = ResultadoFase::where('user_id', $usuario->id)
            ->orderByDesc('id')
            ->first();

        $str_fase = $resultadofase?->fase->titulo ?? 'Nenhuma fase jogada até então';

        $usuarioconquista = UsuarioConquista::where('user_id', $usuario->id)
            ->orderByDesc('id')
            ->first();

        $str_conquista = $usuarioconquista?->conquista->nome ?? 'Nenhuma conquista alcançada até então';

        return view('dashboard', compact('usuario', 'str_fase', 'str_conquista'));
    }
}
