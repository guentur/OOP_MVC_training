<?php
class Employee
{
    private $name; // имя
    private $salary; // зарплата
    
    public function __construct($name, $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }
    
    // Геттер имени:
    public function getName()
    {
        return $this->name;
    }
    
    // Геттер зарплаты:
    public function getSalary()
    {
        return $this->salary;
    }
}

class Student
{
    private $name; // имя
    private $scholarship; // стипендия
    
    public function __construct($name, $scholarship)
    {
        $this->name = $name;
        $this->scholarship = $scholarship;
    }
    
    // Геттер имени:
    public function getName()
    {
        return $this->name;
    }
    
    // Геттер стипендии:
    public function getScholarship()
    {
        return $this->scholarship;
    }
}

class UsersCollection
{
    private $employes = [];
    private $students = [];

    function add($user) {
        if($user instanceof Student) {
            $this->students[] = $user;
        } else if($user instanceof Employee) {
            $this->employes[] = $user;
        }
    }

    function getTotalScholarship() {
        $sum = 0;
        foreach($this->students as $student) {
            $sum += $student->getScholarship();
        }
        return $sum;
    }

    function getTotalSalary() {
        $sum = 0;
        foreach($this->employes as $employe) {
            $sum += $employe->getSalary();
        }
        return $sum;
    }

    function getTotalPayment() {
        return $this->getTotalSalary() +
            $this->getTotalScholarship();
    }
}



?>