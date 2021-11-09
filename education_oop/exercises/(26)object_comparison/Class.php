<?php
//=========================== Exercise 1
class User
{
    private $name;
    private $age;
    
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
    
    public function getName()
    {
        return $this->name;
    }
    
    public function getAge()
    {
        return $this->age;
    }
}
//=========================== /Exercise 1/

//=========================== Exercise 2
class Employee
{
    private $name;
    private $salary;
    
    public function __construct($name, $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }
    
    public function getName()
    {
        return $this->name;
    }
    
    public function getSalary()
    {
        return $this->salary;
    }
}
    
class EmployeesCollection
{
    private $employees = [];

    // Если такого работника нет - то добавляем:
    function add($newEmployee) {
        // Эквивалентно методу exists с == (если установить false),(если установить true, будет еквивалентно ===)
        if(!in_array($newEmployee, $this->employees, false)) {
           $this->employees[] = $newEmployee; 
        } else {
            return false;
        }
    }

    function getEmployees() {
        return $this->employees;
    }

    // //проверка на наличие одинакового пользователя
    // private function exists($newEmployee) {
    //     foreach($this->employees as $employee) {
    //         if($employee == $newEmployee) {
    //             return true;
    //         }
    //     }
    //     return false;
    // }
}

//=========================== /Exercise 2/
?>