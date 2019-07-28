<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent{
	
	public $name;

	// public $timestamps = ['created_at', 'updated_at'];
	public $timestamps = [];

	protected $fillable = [
		'username',
		'email'
	];
}