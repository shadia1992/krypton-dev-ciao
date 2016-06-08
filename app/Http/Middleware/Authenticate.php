<?php

namespace App\Http\Middleware;

use Closure;
<<<<<<< HEAD
use Illuminate\Support\Facades\Auth;
=======
use Session;

>>>>>>> f2e5e1de5eeb5e85be08cc278f5b8b19dc6baba3

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
<<<<<<< HEAD
        if (Auth::guard($guard)->guest()) {
            if ($request->ajax() || $request->wantsJson()) {
                return response('Unauthorized.', 401);
            } else {
                return redirect()->guest('login');
            }
        }

        return $next($request);
=======
       $userId = Session::get('id');
       if (!isset($userId)) {
           return response('Unauthorised', 403);
       }
       return $next($request);
>>>>>>> f2e5e1de5eeb5e85be08cc278f5b8b19dc6baba3
    }
}
