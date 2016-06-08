<?php

namespace App\Http\Middleware;

use Closure;
use Session;


class Authenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
       $userId = Session::get('id');
       if (!isset($userId)) {
           return response('Unauthorised', 403);
       }
       return $next($request);
    }
}
