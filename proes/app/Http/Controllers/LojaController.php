<?php

namespace App\Http\Controllers;

use App\Models\Avatar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LojaController extends Controller
{
    public function index()
    {
        $avatares = Avatar::all();
        $usuario = Auth::user();
        return view('loja.index', compact('avatares', 'usuario'));
    }

    public function comprar(Avatar $avatar)
    {
        $usuario = Auth::user();

        // Verifica se o avatar já foi previamente comprado pelo usuário
        if ($usuario->avatares->contains($avatar->id)) {
            return redirect()->back()->with('info', 'Você já possui este avatar.');
        }

        // Verifica se o usuário tem moedas suficientes para comprar o avatar
        if ($usuario->moedas < $avatar->preco) {
            return redirect()->back()->with('error', 'Moedas insuficientes.');
        }

        // Realiza, de fato, a compra do avatar
        $usuario->moedas -= $avatar->preco;
        $usuario->save();
        $usuario->avatares()->attach($avatar->id);

        return redirect()->back()->with('success', 'Avatar comprado, encontre-o em sua coleção!');
    }
}
