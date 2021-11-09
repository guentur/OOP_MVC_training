<?php

class User
{
    private $name;
    private $age;

    function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    function getName() {
        return $this->name;
        return $this;
    }

    function getAge() {
        return $this->age;
        return $this;
    }
}

class Student extends User
{
    private $course;

    function __construct($name, $age, $course) {
        parent::__construct($name, $age);// вызываем конструктор родителя

        $this->course = $course;
    }

    function getCourse() {
        return $this->course;
        return $this;
    }

    function getFullInformation() {
        $this->getAge();
        $this->getName();
        $this->getCourse();
    }
}
// =============================== Exercise 2

/*
Задача 1
Сделайте приватный метод calculateAge, 
который параметром будет принимать дату рождения, 
а возвращать возраст с учетом того, 
был ли уже день рождения в этом году, или нет.

Задача 2
Сделайте так, чтобы метод calculateAge вызывался в 
конструкторе объекта, рассчитывал возраст пользователя 
и записывал его в приватное свойство age. 
Сделайте геттер для этого свойства.
*/

class People
{
    private $name;
    private $surname;
    private $birthday;

    function __construct($name, $surname, $birthday) {
        $this->name = $name;
        $this->surname = $surname;
        $this->birthday = $birthday;
    }

    function getName() {
        return $this->name;
    }

    function getSurname() {
        return $this->surname;
    }

    function getBirthday() {
        return $this->birthday;
    }

    private function calculateAge() {

    }
}

class Employee extends People
{
    private $salary;

    function __construct($name, $surname, $birthday, $salary) {
        parent::__construct($name, $surname, $birthday);
        $this->salary = $salary;
    }

    function getSalary() {
        return $this->salary;
    }
}
?>