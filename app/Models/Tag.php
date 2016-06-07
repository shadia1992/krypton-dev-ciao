<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model {

	protected $table = 'tags';
	public $timestamps = false;

	public function discussions()
	{
		return $this->belongsToMany('Discussion');
	}

	public function questions()
	{
		return $this->belongsToMany('Question');
	}

}