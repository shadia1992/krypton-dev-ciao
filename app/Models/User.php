<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingTrait;
use Validator;
use DB;
use Session;
use Group;

class User extends Model {

	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','email','sex','birth_year', 'phone_number','password','origin_id'
    ];


	protected $table = 'users';
	public $timestamps = true;
	protected $dates = ['deleted_at'];

	public function questions()
	{
		return $this->hasMany('Question');
	}

	public function responses()
	{
		return $this->hasMany('Response');
	}

	public function discussions()
	{
		return $this->hasMany('Discussion');
	}

	public function comments()
	{
		return $this->hasMany('Comment');
	}

	public function groups()
	{
		return $this->belongsToMany('App\Models\Group');
	}

	public function origin()
	{
		return $this->hasOne('Origin');
	}

	public static function getVali($fields){

		$validator = Validator::make(
    		[   
    	'name' => $fields['name'],
        'email' => $fields['email'],
        'sex' => $fields['sex'],
        'birth_year' => $fields['birth_year'],
        'phone_number' => $fields['phone_number'],
        'password' => $fields['password'],
        'origin_id' => $fields['origin_id']
        	],
    		[
        'name' => 'max:20|required',
        'email' => 'max:50',
        'sex' => 'required',
        'birth_year' => 'required|numeric',
        'phone_number' => 'numeric',
        'password' => 'required',
        'origin_id' => 'numeric'
    		]
		);
    	if ($validator->fails())
    	{
    		return false;
    	}else{
    		return true;
    	}
	}

	public static function userExists($fields){
		$user = DB::table('users')->select('name')->where('name', '=', $fields['name'])->count();
		if ($user == 0) {
			return false;
		}else{
			return true;
		}
	}

	public static function isAdmin(){
		$isAdmin = false;
		if(null!==(Session::get('id'))){
			$user = User::find(Session::get('id'));
			$groups = $user->groups;
			foreach($groups as $group){
				if($group->name == 'admin'){
					$isAdmin = true;
				}
			}
		}
		return $isAdmin;
	}


}