<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Subject;
use Validator;

class Discussion extends Model {


	protected $fillable = [
        'subject_id', 'user_id','title','score','moderated','content'
    ];
	protected $table = 'discussions';
	public $timestamps = true;

	protected $dates = ['deleted_at'];

	public function subject()
	{
		return $this->belongsTo('Subject', 'subject_id');
	}

	public function user()
	{
		return $this->belongsTo('User', 'user_id');
	}

	public function tags()
	{
		return $this->belongsToMany('Tag');
	}

	public function comments()
	{
		return $this->hasMany('Comment');
	}

	public static function getVali($fields){

		$validator = Validator::make(
    		[   
    	'subject_id' => $fields['subject_id'],
    	//'user_id' => $fields['user_id'],
        //'title' => $fields['title'],
        'content' => $fields['content']
        	],
    		[
        'subject_id' => 'exists:subjects,id|required',
        //'user_id' => 'required|numeric',
        //'title' => 'max:128|required|string',
        'content' => 'required|string'
    		]
		);

    	return $validator->passes();
    	
	}

	

}