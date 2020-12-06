<?php

namespace App\Http\Middleware;

use Closure;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     * @param $request
     * @param Closure $next
     * @param $role
     * @param null $permission
     * @return mixed
     */
    public function handle($request, Closure $next, $role, $permission = null)
    {
        $user = $request->user();
        if(!$user->hasRole($role)) {
            return response()->json(['msg' => 'Access forbidden'],403);
        }
        if($permission !== null && !$user->can($permission)) {
            return response()->json(['msg' => 'Access forbidden'],403);
        }
        return $next($request);
    }
}
