<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class adminmiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //logika jika dia user maka diarahkan ke halaman dashboard dan jika dia bukan user (admin) maka diarahkan ke peritah selanjutnya
        if ($request->user() && !$request->user()->isAdmin()) {
            return redirect('/dashboard');
        }
        //else
        return $next($request);
    }
}
