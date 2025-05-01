<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfessorMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && Auth::user()->tipo === 'professor') {
            return $next($request);
        }

        abort(403, 'Acesso negado. Apenas professores podem acessar esta página.');
    }
}
