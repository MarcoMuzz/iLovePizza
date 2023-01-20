<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Http\Request;



class VerificaRuolo
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $role
     * @return mixed
     */
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
