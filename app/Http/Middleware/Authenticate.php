<?php
namespace App\Http\Middleware;
use Closure;
use Session;

use Illuminate\Support\Facades\Auth;
<<<<<<< HEAD

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
>>>>>>> 1b68c1c499175e57452224dd43ac0db2bbe13982
       $userId = Session::get('id');
       if (!isset($userId)) {
              return response('Unauthorised', 403);
       }
       return $next($request);
        if (Auth::guard($guard)->guest()) {
               if ($request->ajax() || $request->wantsJson()) {
                      return response('Unauthorized.', 401);
               } else {
                      return redirect()->guest('login');
               }
        }
        return $next($request);
    }
}