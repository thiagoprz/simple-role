<?php

namespace Thiagoprz\SimpleRole\Http\Middleware;

use Closure;
use \Illuminate\Http\Request;

/**
 * Class SimpleRole
 * @package Thiagoprz\SimpleRole\Http\Middleware
 */
class SimpleRole
{
    /**
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $args = func_get_args();
        in_array($request->user()->role, array_slice($args, 2)) || abort(401, __('auth.unauthorized'));
        return $next($request);
    }
}