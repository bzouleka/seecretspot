<?php

namespace App\Http\Middleware;

use Closure;


class Auth
{
    /**
     * @param $request
     * @param Closure $next
     * @return $this|mixed
     */
    public function handle($request, Closure $next)
    {

        if (auth()->guest()) {

            return redirect('/login')->withErrors([
                'user_name' => 'Vous devez être connecté pour accéder à cette page.',


            ]);
        }

        return $next($request);
    }
}
