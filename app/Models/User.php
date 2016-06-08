<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class User extends Model {

	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','email','sex','birth_year', 'phone_number','password','origin_id'
    ];

    protected static $rules = [
        'name' => 'max:20|required',
        'email' => 'max:50',
        'sex' => 'required',
        'birth_year' => 'required',
        'phone_number' => 'numeric',
        'password' => 'required',
        'origin_id' => 'numeric'

    ];


	protected $table = 'users';
	public $timestamps = true;
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