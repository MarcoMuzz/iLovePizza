<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Http\Request;

/**
 * Autore: Baso
 */
class VerificaRuolo
{
    public function handle($request, Closure $next,$ruolo)
    {
        if ($request->user()->custom>=$ruolo) {
            return $next($request);
        }
        else
        {
            return redirect('home');
        }

    }

}
