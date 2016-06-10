<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Validator;
use App\Models\User;

class Question extends Model {

	protected $table = 'questions';
	public $timestamps = true;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'title','content','comment','answered', 'moderated','subject_id','user_id'
	];

	protected $dates = ['deleted_at'];

	public function subject()
	{
		return $this->belongsTo('Subject', 'subject_id');
	}

	public function user()
	{
		return $this->belongsTo('App\Models\User', 'user_id');
	}

	public function response()
	{
		return $this->hasOne('Response');
	}

	public function tags()
	{
		return $this->belongsToMany('Tag');
	}


	public static function getVali($fields){

		$validator = Validator::make(
			[
				'title' => $fields['title'],
				'content' => $fields['content'],
				'subject_id' => $fields['subject_id'],
				'user_id' => $fields['user_id']

			],
			[
				'title'=> 'string|between:0,200|sometimes',
				'content' => 'string|required',
				'subject_id' => 'exists:subjects,id|required',
				'user_id' => 'exists:users,id|required'
			]
		);

		return $validator->passes();

	}
}