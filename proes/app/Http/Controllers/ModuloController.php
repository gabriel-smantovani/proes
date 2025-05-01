<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Modulo;

class ModuloController extends Controller
{
    public function index()
    {
        $modulos = Modulo::all();
        return view('modulos.index', compact('modulos'));
    }

    public function show($id)
    {
        $modulos = Modulo::with(['fases', 'materiaisdidaticos'])->findOrFail($id);

        return view('modulos.show', [
            'modulos' => $modulos,
            'fases' => $modulos->fases,
            'materiaisdidaticos' => $modulos->materiaisdidaticos,
        ]);
    }
}
