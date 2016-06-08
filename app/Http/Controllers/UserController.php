<?php 

namespace App\Http\Controllers;


use Illuminate\Routing\Controller as BaseController;
use App\Models\Origin;
use App\Models\User;
use App\Models\Group;
use Session;
use Request;

class UserController extends BaseController {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $users = User::all();
    return $users;
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store()
  {
     //echo "coucou";
      $fields = Request::only('name','email','sex','birth_year', 'phone_number','password','origin_id');
       $user = new User($fields);
       $group = Group::find(1);
       $group->users()->save($user);
       $user->save();
       return $user;
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show()
  {
    $user = User::find(Session::get('id'));
       return $user;
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit()
  {
    
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
    
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    
  }
  
}

?>