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
		return $this->belongsTo('App\Models\Theme', 'theme_id');
	}

	public function questions()
	{
		return $this->hasMany('App\Models\Question');
	}

	public function discussions()
	{
		return $this->hasMany('App\Models\Discussion');
	}

	public static function subjectExists($fields){
		$subject = DB::table('subjects')->select('name')->where('id', '=', $fields['subject_id'])->count();
		if ($subject == 0) {
			return false;
		}else{
			return true;
		}
	}

}