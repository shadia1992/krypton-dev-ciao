<?php
namespace App\Http\Middleware;
use Closure;
use Session;

<<<<<<< HEAD

use Illuminate\Support\Facades\Auth;


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

=======
use Illuminate\Support\Facades\Auth;
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
>>>>>>> 547c1b950d1f5e16fda87ebb9aca6c9459bf04c0
       $userId = Session::get('id');
       if (!isset($userId)) {
              return response('Unauthorised', 403);
       }
       return $next($request);
<<<<<<< HEAD

=======
>>>>>>> 547c1b950d1f5e16fda87ebb9aca6c9459bf04c0
        if (Auth::guard($guard)->guest()) {
               if ($request->ajax() || $request->wantsJson()) {
                      return response('Unauthorized.', 401);
               } else {
                      return redirect()->guest('login');
               }
        }
        return $next($request);
<<<<<<< HEAD

=======
>>>>>>> 547c1b950d1f5e16fda87ebb9aca6c9459bf04c0
    }
}