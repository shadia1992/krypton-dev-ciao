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

class UserController extends Controller {

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
        User::getGroup();
        dd("coucou");
        //echo "coucou";
        //$fields = $request::only('name','email','sex','birth_year', 'phone_number','password','origin_id');
        $fields = $request::all();
        $validator = User::getVali($fields);
        if($validator){
            $userExists = User::userExists($fields);

            //dd($userExists);
            if (!$userExists) {
                $fields['password'] = bcrypt($fields['password']);
                $user = new User($fields);
                $group = Group::find(1);
                $group->users()->save($user);
                $user->save();
                return $user;
            } else {
                echo "Pseudo existant, on redirige vers la vue de création";
            }
        }else
            echo "Pas de respect des contraintes d'ajout, on redirige la vue création";
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
    public function update()
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