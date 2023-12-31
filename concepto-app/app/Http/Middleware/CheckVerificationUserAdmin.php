<?php

namespace App\Http\Middleware;


use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;


class CheckVerificationUserAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next ,$username): Response
    {
    // Verificar si el usuario está autenticado
    if (Auth::check()) {
        // Obtener el usuario autenticado
        $user = Auth::user();

        // Verificar si el nombre de usuario coincide con el proporcionado en este caso 'Admin'
        if ($user->username === $username) {
            return $next($request);
        }
    }

    // Si no coincide, redirigir al login de un usuario común.
    return redirect()
                ->route('auth.web.login.form');

    }
}
