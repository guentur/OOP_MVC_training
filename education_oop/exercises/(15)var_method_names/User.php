<?php

class User 
{
    private $name;
    private $age;

    function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    function getAge() {
        return $this->age;
    }
    
    function getName() {
        return $this->name;
    }
}


?>