<?php
namespace Project\Controllers;
use \Core\Controller as Controller;

class UserController extends Controller
{
	private $users = [];

	function __construct() {
			$this->users = [
		1 => ['name'=>'user1', 'age'=>'23', 'salary' => 1000],
		2 => ['name'=>'user2', 'age'=>'24', 'salary' => 2000],
		3 => ['name'=>'user3', 'age'=>'25', 'salary' => 3000],
		4 => ['name'=>'user4', 'age'=>'26', 'salary' => 4000],
		5 => ['name'=>'user5', 'age'=>'27', 'salary' => 5000],
		6 => ['name'=>'user5', 'age'=>'27', 'salary' => 5000],
	];
	}

	function show($params) {
		if(is_numeric($params['id'])) {
			var_dump( $this->users[ $params['id'] ] );
		} else {
			echo 'Передан не потдерживаемый тип данных';
		}
	}

	function info($params) {
		echo $this->users[ $params['id'] ][ $params['key'] ];
	}

	function all() {
		foreach ($this->users as $value) {
			$user = implode(' - ', $value);
			echo $user . '<br>';
		}
	}

	function first($params) {
		for ($i=1; $i < $params['n'] + 1; $i++) {
			echo '<pre>';
			var_dump($this->users[$i]);
			if($i == count($this->users)) {die();}
		}
	}
}

