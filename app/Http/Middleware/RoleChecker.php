<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class RoleChecker
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $admin, $patient,  $doctors, $pharmacist)
    {
        $user = Auth::user();
        $role = Auth::check() ? $user->role->name : '';

        if ($role === $admin) {

            return $next($request);

        } else if ($role === $patient) {

            return $next($request);

        } else if ($role=== $doctors) {

            return $next($request);

        } else if ($role === $pharmacist) {

            return $next($request);

        }

        return response()->json(['UnAuthorised'], 401);
    }
}
