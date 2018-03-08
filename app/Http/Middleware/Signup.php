<?php

namespace App\Http\Middleware;

use Closure;

class Signup
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (auth()->check()) {

            return redirect()->route('homePage')->withErrors([
                'barre-de-recherche' => 'Vous êtes déjà inscrit sur notre site.'
            ]);
        }
        return $next($request);
    }
}
