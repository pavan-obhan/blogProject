<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class MustBeAdministrator
{
    /**
     * Handle an incoming request.
     *
     * @return mixed
     * @param \Closure $next
     * @param \Illuminate\Http\Request $request
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->user()?->username != 'awakeningconcious') {
            abort(\Illuminate\Http\Response::HTTP_FORBIDDEN);
        }
        return $next($request);
    }
}
