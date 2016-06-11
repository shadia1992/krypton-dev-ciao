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
    	if(!User::is('admin')){
            if(User::isLogged()){
            	Session::forget('id');
            }
        }
        return view('user/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        if(!User::is('admin')){
            if(User::isLogged()){
                Session::forget('id');
            }
            $request->merge(['group_id' => DB::table('groups')->where('name', 'guest')->value('id')]);
        }
        
        $validator = User::getValidation($request);

        if ($validator->fails()){
            $request->flash();
            return view('user/create')->withErrors($validator);
        }

        $inputs = $validator->getData();
        $inputs['password'] = bcrypt($inputs['password']);
        $user = new User($inputs);
        $group = Group::find($request->only('group_id')['group_id']);
        $group->users()->save($user);
        $user->save();
        return response('OK', 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        if(User::is('admin')){
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
    	if(User::is('admin')){
            $user = User::find($id);
        }else{
            $user = User::find(Session::get('id'));
        }

        if($user){
            return view('user/edit',$user,['group_id' => $user->groups()->first()['id']]);
        }else{
            return response('Bad Request', 400);
        }
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, Request $request)
    {
        if(!User::is('admin')) {
        	$id = Session::get('id');
			$request->merge(['group_id' => DB::table('groups')->where('name', 'guest')->value('id')]);
        }

        $user = User::find($id);
        if (!$user){
            return response('Bad Request', 400);
         }else{
         	$rules = [
		        'name' => 'min:2|max:20|required|unique:users,name,'.$user->id,
		        'email' => 'max:50|email|unique:users,email,'.$user->id,
		        'sex' => 'required',
		        'birth_year' => 'required|numeric|min:1900|max:2016',
		        'phone_number' => 'regex:/^((\+)?)([\s-.\(\)]*\d{1}){8,13}$/|unique:users,phone_number,'.$user->id,
		        'password' => 'required|min:6|confirmed',
		        'origin_id' => 'required|numeric|exists:origins,id',
		        'group_id' => 'required|numeric|exists:groups,id'
		    ];
		    $inputs = $request->only('name','email','sex','birth_year','phone_number','password','password_confirmation','origin_id','group_id');
			$validator = Validator::make($inputs, $rules);
			if ($validator->fails()){
	            $request->flash();
	            return view('user/edit',$user,['group_id' => $user->groups()->first()['id']])->withErrors($validator);
	        }
	        $inputs = $validator->getData();
	        $inputs['password'] = bcrypt($inputs['password']);
			$user->name = $inputs['name'];
            $user->email = $inputs['email'];
            $user->sex = $inputs['sex'];
            $user->birth_year = $inputs['birth_year'];
            $user->phone_number = $inputs['phone_number'];
            $user->password = $inputs['password'];
            $user->origin_id = $inputs['origin_id'];
	        $group = Group::find($request->only('group_id')['group_id']);
	        $group->users()->save($user);
	        $user->save();
        	return response('OK', 200);
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
        if(!User::is('admin')) {
        	$id = Session::get('id');
        }	
        $user = User::find($id);
        if (!isset($user)) {
            return response('Not found', 404);
        }else{
            $user->delete();
    		return response('OK', 200);
        }
    }

}
?>