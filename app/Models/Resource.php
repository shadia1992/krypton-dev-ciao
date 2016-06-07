<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model {

	protected $table = 'resources';
	public $timestamps = false;

	public function groups()
	{
		return $this->belongsToMany('Group');
	}

}