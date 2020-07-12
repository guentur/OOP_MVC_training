<?php

// ============================ Exercise 1
class Employee
{
    public $name;
    public $salary;

    function __construct($name, $salary) {
        $this->name = $name;
        $this->salary = $salary;
    }
}

class Student
{
    public $name;
    public $scholarship;// Стипендия

    function __construct($name, $scholarship) {
        $this->name = $name;
        $this->scholarship = $scholarship;
    }
}
// ============================ /Exercise 1/

// ============================ Exercise 2
class User
{
    public $name;
    public $surname;

    function __construct($name, $surname) {
        $this->name = $name;
        $this->surname = $surname;
    }
}

class Employees extends User
{
    public $salary;

    function __construct($name, $surname, $salary) {
        parent::__construct($name, $surname);
        $this->salary = $salary;
    }
}

class City
{
    public $name;
    public $population;

    function __construct($name, $population) {
        $this->name = $name;
        $this->population = $population;
    }   
}
// ============================ /Exercise 2/

?>