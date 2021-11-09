<?php

class User
{
    public $name;
    public $age;

    function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
}

class City
{
    public $name;
    public $foundation;
    public $population;

    function __construct($name, $foundation, $population) {
        $this->name = $name;
        $this->foundation = $foundation;
        $this->population = $population;
    }
}

class Client
{
    public $surname; // фамилия
    public $name; // имя
    public $patronymic; // отчество
    
    public function __construct($surname, $name, $patronymic)
    {
        $this->surname = $surname;
        $this->name = $name;
        $this->patronymic = $patronymic;
    }
}

?>