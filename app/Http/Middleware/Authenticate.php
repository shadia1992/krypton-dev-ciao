<?php

namespace App\Http\Middleware;

use Closure;
<<<<<<< 424b323dfd756b75a62d7058254fc0d212d3186e
use Session;

=======
use Illuminate\Support\Facades\Auth;
>>>>>>> Get proj

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
<<<<<<< 424b323dfd756b75a62d7058254fc0d212d3186e
       $userId = Session::get('id');
       if (!isset($userId)) {
           return response('Unauthorised', 403);
       }
       return $next($request);
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
    }
}
