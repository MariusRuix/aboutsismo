<?php

namespace App\Http\Middleware;

use Closure;

class MustSetPassword
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
        // Don't do anything if they are on the create password route.
        if ($request->is('password/set') || $request->is('logout')) {
            return $next($request);
        }

        // if they are not logged in we just continue like normal
        // then, we check if they have set their password yet.
        if ($request->user() && $request->user()->has('provisional_password')) {
            return redirect()
                    ->route('password.set.create')
                    ->with('success', '!Bienvenido! Por motivos de seguridad debes cambiar tu contraseña.');
        }

        return $next($request);
    }
}
