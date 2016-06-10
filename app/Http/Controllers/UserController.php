<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Origin;
use App\Models\User;
use App\Models\Group;
use Session;
use Illuminate\Http\Request;
use Validator;
use DB;
use Hash;
use Redirect;
use Input;
class UserController extends Controller {
    
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('user/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('user/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        if(!User::isAdmin()){
            if(User::isLogged()){
                return Redirect::to('/auth/logout');
            }
            $request->merge(['group_id' => DB::table('groups')->where('name', 'guest')->value('id')]);
        }
        
        $validate = User::getValidation($request);

        if ($validate->fails()){
            $request->flash();
            return view('user/create')->withErrors($validate);
        }

        $inputs = $validate->getData();
        $inputs['password'] = bcrypt($inputs['password']);
        $user = new User($inputs);
        $group = Group::find($request->only('group_id')['group_id']);
        $group->users()->save($user);
        $user->save();
        return view('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {

        if(User::isAdmin()){
            $user = User::find($id);
        }else{
            $user = User::find(Session::get('id'));
        }
        if($user){
            return view('user/show',$user);
        }else{
            return response('Bad Request', 400);
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