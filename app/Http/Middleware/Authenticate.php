<?php

namespace App\Http\Middleware;

use Closure;
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Facades\Auth;
=======
use Session;

>>>>>>> f2e5e1de5eeb5e85be08cc278f5b8b19dc6baba3
=======
<<<<<<< 424b323dfd756b75a62d7058254fc0d212d3186e
use Session;

=======
use Illuminate\Support\Facades\Auth;
>>>>>>> Get proj
>>>>>>> b60b0054af1269d82ddfc2d978e15c182627915c

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
=======
<<<<<<< 424b323dfd756b75a62d7058254fc0d212d3186e
>>>>>>> b60b0054af1269d82ddfc2d978e15c182627915c
       $userId = Session::get('id');
       if (!isset($userId)) {
           return response('Unauthorised', 403);
       }
       return $next($request);
<<<<<<< HEAD
>>>>>>> f2e5e1de5eeb5e85be08cc278f5b8b19dc6baba3
=======
=======
        if (Auth::guard($guard)->guest()) {
            if ($request->ajax() || $request->wantsJson()) {
                return response('Unauthorized.', 401);
            } else {
                return redirect()->guest('login');
            }
        }

        return $next($request);
>>>>>>> Get proj
>>>>>>> b60b0054af1269d82ddfc2d978e15c182627915c
    }
}
