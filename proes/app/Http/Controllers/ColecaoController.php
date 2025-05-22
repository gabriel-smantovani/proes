<?php

namespace App\Http\Controllers;

use App\Models\Avatar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ColecaoController extends Controller
{
    public function index()
    {
        $avatares = Avatar::all();
        $usuario = Auth::user();
        return view('colecao.index', compact('avatares', 'usuario'));
    }

    public function equipar(Avatar $avatar)
    {
        $usuario = Auth::user();

        // Para trocar o avatar equipado pelo escolhido na aba minha coleção
        if ($avatar->equipado_em == 'cabeca')
            $usuario->avatar_cabeca = $avatar->imagem;
        else
            $usuario->avatar_traje = $avatar->imagem;
        
        $usuario->save();

        return redirect()->back()->with('success', 'Avatar equipado!');
    }
}
