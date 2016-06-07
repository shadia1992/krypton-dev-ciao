<?php 

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Models\Origin;
use App\Models\User;
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
    return Origin::all();
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
       /*if (!User::validate($fields)) {
           return response('Fields error', 400);

       }*/
       $user = new User($fields);
       $user->save();
       return $user;
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
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