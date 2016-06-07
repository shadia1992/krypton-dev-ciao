<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Comment extends Model {

	protected $table = 'comments';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];

	public function user()
	{
		return $this->belongsTo('User', 'user_id');
	}

	public function discussion()
	{
		return $this->belongsTo('Discussion');
	}

	public function comment()
	{
		return $this->belongsTo('Comment');
	}

	public function comments()
	{
		return $this->hasMany('Comment');
	}

}