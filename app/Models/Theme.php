<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Validator;
use DB;
use Session;


class Theme extends Model {

	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    public static $rules = [
        'name' => 'min:2|max:40|required|unique:themes,name',
        'content' => 'required',
    ];

	protected $table = 'themes';
	public $timestamps = false;

	public static function getValidation(Request $request){

		$inputs = $request->only('name','content');
		$validator = Validator::make($inputs, self::$rules);
		return $validator;
	}

	public function subjects()
	{
		return $this->hasMany('App\Models\Subject');
	}
}