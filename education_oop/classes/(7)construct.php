<?php
//////////////Lessons "__construct"
class User 
{
	public $name;
	public $age;

	// Конструктор объекта:
	public function __construct($name, $age) {
		$this->name = $name; // запишем данные в свойство name
		$this->age = $age; // запишем данные в свойство age
	}
}

$user = new User('Коля', 25); //создадим обьект, сразу заполнив данными

echo $user->name . "<br />"; //выведет Коля
echo $user->age . "<br />"; //выведет 25
/*===========//Lessons "__construct"*/

//////////////Exercises "__construct"

class Employee 
{
	public $name;
	public $age;
	public $salary;

	// Конструктор объекта:
	public function __construct($name, $age, $salary) {
		$this->name = $name;
		$this->age = $age;
		$this->salary = $salary;
	}
}

$obj_vasya = new Employee("Вася", 25, 1000);//создадим обьект "Вася", сразу заполнив данными
$obj_petya = new Employee("Петя", 30, 2000);//создадим обьект "Петя", сразу заполнив данными

echo $obj_vasya->salary + $obj_petya->salary;//Получаем сумму зарплат Васи и Пети
/*=============//Exercises "__construct"*/
?>