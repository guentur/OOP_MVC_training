<?php

abstract class User
{
    protected $name;

    function getName() {
        return $this->name;
    }

    function setName(string $name){
        return $this->name = $name;
    }

    abstract public function increaseRevenue($value);
    abstract public function decreaseRevenue($value);
}

class Employee extends User
{
    protected $salary;

    function getSalary() {
        return $this->salary;
    }

    function setSalary($salary) {
        $this->salary = $salary;
    }

    public function increaseRevenue($value) {
        $this->salary += $value;
    }

    public function decreaseRevenue($value) {
        $this->salary -= $value;
    }
}

class Student extends User
{
    protected $scholarship;

    function getScholarship() {
        return $this->scholarship;
    }

    function setScholarship($scholarship) {
        $this->scholarship = $scholarship;
    }

    public function increaseRevenue($value) {
        $this->scholarship += $value;
    }

    public function decreaseRevenue($value) {
        $this->salary -= $value;
    }
}
