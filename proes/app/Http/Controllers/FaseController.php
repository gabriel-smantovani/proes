<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FaseController extends Controller
{
    public function index()
    {
        return view('fases.index');
    }
}
