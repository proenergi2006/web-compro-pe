<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RoleUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    // public function handle(Request $request, Closure $next)
    // {
    //     return $next($request);
    // }
     public function handle(Request $request, Closure $next, ...$roles)
    {
        // Ambil role user yang sedang login
        $userRole = auth()->user()->role;

        // Cek apakah role user sesuai dengan salah satu role yang diberikan
        if (!in_array($userRole, $roles)) {
            // Kalau tidak sesuai, redirect ke halaman akses ditolak
            return redirect('/admin-signin');
        }

        return $next($request);
    }
}
