<?php

namespace App\Http\Middleware;
use App\Models\User;

use Closure;
use Session;
use DB;

class Acl
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
      $data = $request->route()->getAction();
      $route = substr(str_replace($data["namespace"], '', $data["controller"]), 1);
      list($controller, $action) = explode('@', $route);
      $controller = strtolower(substr($controller,0,-10));
      $userId = Session::get('id');

      $resourceId = DB::table('resources')->select('id')->where('name', '=', $controller)->where('action','=',$action)->first();
      $group_user = DB::table('group_user')->select('group_id')->where('user_id','=',$userId)->get();
      $var = 0;
      foreach ($group_user as $group) {
      	$result = DB::table('group_resource')->select('group_id','resource_id')->where('resource_id','=',$resourceId->id)->where('group_id','=',$group->group_id)->get();
      	$var += count($result);
      }

      if ($var == 0) {
          return response('Unauthorised', 403);
      }
      
      return $next($request);
    }
}
