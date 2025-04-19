<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Fase;

class FaseController extends Controller
{
    public function index()
    {
        return view('fases.index');
    }
}
