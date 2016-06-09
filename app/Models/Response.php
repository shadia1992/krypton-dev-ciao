<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Response extends Model {

	protected $table = 'responses';
	public $timestamps = true;
	protected $dates = ['deleted_at'];

	public function question()
	{
		return $this->belongsTo('Question', 'question_id');
	}

	public function user()
	{
		return $this->belongsTo('User', 'user_id');
	}

}