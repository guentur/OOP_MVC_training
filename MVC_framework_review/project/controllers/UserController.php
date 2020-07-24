<?php
namespace Project\Controllers;
use Core\Controller;

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
        ];
    }

    function show($userID) {
        if( is_numeric($userID['id']) ) {
            $result = $this->users[ $userID['id'] ];
            var_dump($result);
        } else {
            
        }
        
    }

    function info ($info) {
        $userID = $info['id'];
        $userKey = $info['key'];
        $result = $this->users[ $userID ][ $userKey ];

        var_dump($result);
    }

    function all() {
        foreach($this->users as $user) {
            echo ("</br>" . var_dump($user));
        }
    }

    function first($n) {
        for($i=1; $i <= $n["count"]; $i++) {
            echo ( "</br>" . var_dump($this->users[$i]) );
        }
    }
}

?>