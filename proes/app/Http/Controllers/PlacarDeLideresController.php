<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PlacarDeLideresController extends Controller
{
    public function index()
    {
        $rankingPontuadores = User::select('users.id', 'users.name')
            ->join('resultados_fases', 'users.id', '=', 'resultados_fases.user_id')
            ->selectRaw('SUM(resultados_fases.pontuacao) as total_pontuacao')
            ->groupBy('users.id', 'users.name')
            ->orderByDesc('total_pontuacao')
            ->get();

        return view('placar_de_lideres.index', compact('rankingPontuadores'));
    }
}
