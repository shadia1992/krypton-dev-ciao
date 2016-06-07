<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Question extends Model {

	protected $table = 'questions';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];

	public function subject()
	{
		return $this->belongsTo('Subject', 'subject_id');
	}

	public function user()
	{
		return $this->belongsTo('User', 'user_id');
	}

	public function response()
	{
		return $this->hasOne('Response');
	}

	public function tags()
	{
		return $this->belongsToMany('Tag');
	}

}