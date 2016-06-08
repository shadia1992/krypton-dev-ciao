<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model {

	protected $table = 'subjects';
	protected $primaryKey = 'id';
	public $timestamps = false;
	protected $softDelete = false;

	public function theme()
	{
		return $this->belongsTo('Theme', 'theme_id');
	}

	public function questions()
	{
		return $this->hasMany('Question');
	}

	public function discussions()
	{
		return $this->hasMany('Discussion');
	}

}