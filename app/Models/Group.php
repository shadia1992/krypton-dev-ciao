<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model {

	protected $table = 'groups';
	public $timestamps = false;

	public function users()
	{
		return $this->belongsToMany('App\Models\User');
	}

	public function resources()
	{
		return $this->belongsToMany('Resource');
	}

}