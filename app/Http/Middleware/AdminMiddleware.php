<?php

namespace App\Http\Middleware;

use Closure;

class AdminMiddleware
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
        if ((auth()->check() && auth()->user()->type === 'ad')){
            return $next($request);
        }
        else{
            auth()->logout();
            return redirect('/')->with('message',__("Solo puede iniciar sesión el administrador"));
        }
    }
}
