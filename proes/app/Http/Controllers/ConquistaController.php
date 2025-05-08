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
        $conquistasIds = UsuarioConquista::where('user_id', $usuario->id)->pluck('conquista_id');
        $conquistas = Conquista::whereIn('id', $conquistasIds)->get();

        return view('conquistas.index', compact('conquistas'));
    }
}
