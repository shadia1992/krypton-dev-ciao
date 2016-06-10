<?php 

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;





//use Illuminate\Routing\Controller as BaseController;
use App\Models\Origin;
use App\Models\User;
use App\Models\Group;
use Session;
//use Illuminate\Http\Request;
use Request;
use Validator;
use DB;
use Hash;

class UserController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $isAdmin = User::getGroup();
    if($isAdmin){
      $users = User::all();
      return $users;
    }else{
      echo "Tu peux pas voir tous les users, t'es pas Admin";
    }
    
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {

    return view('users');
    return view('auth/register');

  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
    
        $fields = $request::only('name', 'email','sex','birth_year','phone_number','password','origin_id');

        $validator = User::getVali($fields);

        if(null==(Session::get('id')) || User::isAdmin()){

          if($validator){

            $userExists = User::userExists($fields);

            if (!$userExists) {

                  $fields['password'] = bcrypt($fields['password']); 

                  $user = new User($fields);

                  if(User::isAdmin()){
                    $tab = $request::only('group_id');
                    $group = Group::find($tab['group_id']);
                  }else{
                    $group = Group::find(1);
                  }
                  $group->users()->save($user);
                  $user->save();
                  return $user;
            } else {
              echo "Pseudo existant, on redirige vers la vue de création";
            }       
          }else{
            echo "Pas de respect des contraintes d'ajout, on redirige la vue création";
          }
        }else{
          echo "Vous etes déjà loggés ou vous n'étes pas Admin pour créer un nouvel user";
        }
    
      
  }
    
    /*$this->validate($request, [
         'name' => 'max:20|required',
        'email' => 'max:50',
        'sex' => 'required',
        'birth_year' => 'required',
        'phone_number' => 'numeric',
        'password' => 'required',
        'origin_id' => 'numeric'
    ]);*/
    //dd($this);

      
      //$validate = User::getValidation($fields);
        // En cas d'échec du validateur, on redirige avec les erreurs et les inputs
        //$users = DB::table('users')->where('name', '=', $fields['name'])->exists();
        

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    $isAdmin = User::isAdmin();

    if($isAdmin){

      $user = User::find($id);

       if (!isset($user)) {
          return response('Not found', 404);
       }else{

        echo "Affiche la fiche de l'user par rapport à l'id choisi, que pour l'admin";
        return $user;
        
       }
    }else{
      $user = User::find(Session::get('id'));
      echo "Afficher coorespondant à la session de l'user en question connecté";
    }
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    $isAdmin = User::isAdmin();
    if($isAdmin){

      $user = User::find($id);

       if (!isset($user)) {
          return response('Not found', 404);
       }else{
        echo "Affiche la fiche de l'user par rapport à l'id choisi";
        return $user;
        
       }
    }else{
      $user = User::find(Session::get('id'));
      if($user->id == $id){
          echo "Afficher coorespondant à la session de l'user en question connecté";
        }else{
          echo "Tu te fous de ma gueule ?!";
        }
      
    }
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {

    $isAdmin = User::isAdmin();
    if($isAdmin){

      $user = User::find($id);

       if (!isset($user)) {
          return response('Not found', 404);
       }else{

        $fields = Request::only('name', 'email','sex','birth_year','phone_number','password','origin_id');

        $validator = User::getVali($fields);


          if($validator){

            $userExists = User::userExists($fields);

            if (!$userExists) {

                  $user->name = $fields['name'];
                  $user->email = $fields['email'];
                  $user->sex = $fields['sex'];
                  $user->birth_year = $fields['birth_year'];
                  $user->phone_number = $fields['phone_number'];
                  $user->password = $fields['password'];
                  $user->origin_id = $fields['origin_id'];

                  $fields['password'] = bcrypt($fields['password']); 

                  if(User::isAdmin()){
                    $tab = Request::only('group_id');
                    $group = Group::find($tab['group_id']);
                  }else{
                    $group = Group::where('name','like','guest');
                  }
                  $group->users()->save($user);
                  $user->save();
                  return $user;
            } else {
              echo "Pseudo existant, on redirige vers la vue d'edit";
            }       
          }else{
            echo "Pas de respect des contraintes d'ajout, on redirige la vue d'edit";
          }
        
       }
    }else{
      $user = User::find(Session::get('id'));

      if($user->id == $id){

        $fields = Request::only('name', 'email','sex','birth_year','phone_number','password','origin_id');

        $validator = User::getVali($fields);


          if($validator){

            $userExists = User::userExists($fields);

            if (!$userExists) {

                  $user->name = $fields['name'];
                  $user->email = $fields['email'];
                  $user->sex = $fields['sex'];
                  $user->birth_year = $fields['birth_year'];
                  $user->phone_number = $fields['phone_number'];
                  $user->password = $fields['password'];
                  $user->origin_id = $fields['origin_id'];

                  $fields['password'] = bcrypt($fields['password']); 

                  if(User::isAdmin()){
                    $tab = $request::only('group_id');
                    $group = Group::find($tab['group_id']);
                  }else{
                    $group = Group::where('name','like','guest');
                  }
                  $group->users()->save($user);
                  $user->save();
                  return $user;
            } else {
              echo "Pseudo existant, on redirige vers la vue d'edit";
            }       
          }else{
            echo "Pas de respect des contraintes d'ajout, on redirige la vue d'edit";
          }
        }else{
          echo "Tu te fous de ma gueule ?!";
        }
      
    }

    
       
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
      $isAdmin = User::isAdmin();
      if($isAdmin){

        $user = User::find($id);

        if (!isset($user)) {
          return response('Not found', 404);
         }else{
          $user->delete();
          echo $user." a été supprimé par admin!";
         }
      }else{
        $user = User::find(Session::get('id'));
        if($user->id == $id){
          $user->delete();
          echo $user." a été supprimé par user";
        }else{
          echo "Tu te fous de ma guele ?!";
        }
        
    }

  }
  
}

?>