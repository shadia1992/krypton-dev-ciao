<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Origin extends Model {

	protected $table = 'origins';
	public $timestamps = false;

	public function users()
	{
		return $this->belongsToMany('User');
	}

}