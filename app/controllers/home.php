<?php

class Home extends Controller {

	// protected $user;

	// public function __construct() {
	// 	$this->user = $this->model('User');
	// }

	public function index($name = '') {
		// echo 'home/index';
		// echo $name;
		// $this->model('User');

		// $user = $this->model('User');
		// $user = $this->user;
		// $user->name = 'Fiyaza';
		// $user->name = $name;
		// echo $user->name;

		$this->view('home/index', ['name' => $user->name]);
	}

	public function test() {
		echo 'test';
	}

	public function create($username = '', $email = '') {
		// $this->user->create([
		// 	'username' => $username,
		// 	'email' => $email
		// ]);

		User::create([
			'username' => $username,
			'email' => $email
		]);
	}
	
}