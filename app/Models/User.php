<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class User extends Model {

	protected $table = 'users';
	public $timestamps = true;

	use SoftDeletingTrait;

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
		return $this->belongsToMany('Group');
	}

	public function origin()
	{
		return $this->hasOne('Origin');
	}

}