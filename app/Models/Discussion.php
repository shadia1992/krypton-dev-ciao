<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Subject;
use Validator;
use Illuminate\Http\Request;
use DB;
use Session;

class Discussion extends Model {


	protected $fillable = [
        'subject_id', 'user_id','title','score','moderated','content'
    ];
	protected $table = 'discussions';
	public $timestamps = true;

	public static $rules = [
        'subject_id' => 'exists:subjects,id|required',
        'user_id' => 'exists:users,id|required',
        'title' => 'min:3|max:128|required|string|unique:discussions,title',
        'content' => 'required|string',
        'moderated' =>	'required',
        'score' => 'required|numeric'

    ];

	protected $dates = ['deleted_at'];

	public static function getValidation(Request $request){

		$inputs = $request->only('subject_id', 'user_id','title','score','moderated','content');
		//dd("coucou");
		$validator = Validator::make($inputs, self::$rules);
		

		return $validator;
	}

	public function subject()
	{
		return $this->belongsTo('App\Models\Subject', 'subject_id');
	}

	public function user()
	{
		return $this->belongsTo('App\Models\User', 'user_id');
	}

	public function tags()
	{
		return $this->belongsToMany('App\Models\Tag');
	}

	public function comments()
	{
		return $this->hasMany('App\Models\Comment');
	}

	

}