<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingTrait;
use Validator;
use Illuminate\Http\Request;
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

    public static $rules = [
        'name' => 'min:2|max:20|required|unique:users,name',
        'email' => 'max:50|email|unique:users,email',
        'sex' => 'required',
        'birth_year' => 'required|numeric|min:1900|max:2016',
        'phone_number' => 'regex:/^((\+)?)([\s-.\(\)]*\d{1}){8,13}$/|unique:users,phone_number',
        'password' => 'required|min:6|confirmed',
        'origin_id' => 'required|numeric|exists:origins,id',
        'group_id' => 'required|numeric|exists:groups,id'
    ];

	protected $table = 'users';
	public $timestamps = true;
	protected $dates = ['deleted_at'];

	public static function getValidation(Request $request){

		$inputs = $request->only('name','email','sex','birth_year','phone_number','password','password_confirmation','origin_id','group_id');
		$validator = Validator::make($inputs, self::$rules);

		return $validator;
	}

    public static function isLogged(){
    	return (Session::get('id') !== null);
    }

    public static function is($name){
		$is = false;
		if(null!==(Session::get('id'))){
			$user = User::find(Session::get('id'));
			$groups = $user->groups;
			foreach($groups as $group){
				if($group->name == $name){
					$is = true;
				}
			}
		}
		return $is;
	}

	public function questions()
	{
		return $this->hasMany('App\Models\Question');
	}

	public function responses()
	{
		return $this->hasMany('App\Models\Response');
	}

	public function discussions()
	{
		return $this->hasMany('App\Models\Discussion');
	}

	public function comments()
	{
		return $this->hasMany('App\Models\Comment');
	}

	public function groups()
	{
		return $this->belongsToMany('App\Models\Group');
	}

	public function origin()
	{
		return $this->hasOne('App\Models\Origin');
	}
}