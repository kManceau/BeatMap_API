<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CustomAuthMiddleware
{
    public function handle($request, Closure $next, $guard = null)
    {
        if (!Auth::guard($guard)->check()) {
            return response()->json([
                'code' => 422,
                'status' => 'error',
                'message' => 'Access Denied - Not logged in',
            ], 422);
        }
        return $next($request);
    }
}
