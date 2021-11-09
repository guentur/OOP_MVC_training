<?php
///////////////Lessons getter/setter
class User
{
	public $name;
	private $age; // объявим возраст приватным
	
	// Метод для чтения возраста юзера:
	public function getAge()
	{
		return $this->age;
	}
	
	// Метод для изменения возраста юзера:
	public function setAge($age)
	{
		// Проверим возраст на корректность:
		if ($this->isAgeCorrect($age)) {
			$this->age = $age;
		}
	}
	
	// Метод для проверки возраста:
	private function isAgeCorrect($age)
	{
		return $age >= 18 and $age <= 60;
	}
}
$user = new User;
	
// Установим возраст:
$user->setAge(50);

// Прочитаем новый возраст:
echo "Возраст юзера: " . $user->getAge() . "<br />"; // выведет 50
//==============//Lessons getter/setter

///////////////Exercise getter/setter

//get (getter) - получить
//set (setter) - установить 
class Employee 
{
	private $name;
	private $age;
	private $salary;

	// Метод для смены имени юзера:
	function setName($name) {
		$this->name = $name;
	}
	// Метод для чтения имени юзера:
	function getName() {
		return $this->name;
	}

	// Метод для смены возраста юзера:
	function setAge($age) 
	{
		//Запустить проверку на корректность возраста к заданным данным
		if($this->isAgeCorrect($age)) {
			$this->age = $age;
		}		
	}
	// Метод для чтения возраста юзера:
	function getAge() {
		return $this->age;
	}

	// Метод для изменения зарплаты юзера:
	function setSalary($salary) {
		$this->salary = $salary;
	}
	// Метод для чтения зарплаты юзера:
	function getSalary() {
		return $this->salary . " $";
	}

	//Проверка на корректность возраста к заданным данным:
	private function isAgeCorrect($age) {
		return  $age >= 1 and $age <= 130;
	}
}

$valera = new Employee;
$valera->setAge(3);
echo "Возраст Валеры: " . $valera->getAge() . "<br />";

$valera->setSalary(3000);
echo "Зарплата Валеры: " . $valera->getSalary() . "<hr>";
//=================//Exercise getter/setter

///////////////Exercise read-only
class EmployeeReadOnly
{
	private $name;
	private $surname;
	private $salary;
	
	// Конструктор объекта:
	function __construct ($name, $surname, $salary) {
		$this->name = $name;
		$this->surname = $surname;
		$this->salary = $salary;
	}

	// Геттер для имени:
	function getName() {
		return $this->name;
	}
	
	// Геттер для фамилии:
	function getSurname() {
		return $this->surname;
	}

	// Геттер для зарплаты:
	function getSalary() {
		return $this->salary . " $";
	}

	// Сеттер для зарплаты:
	function setSalary($salary) {
		$this->salary = $salary;
	}
}
$vasyaIvanov = new EmployeeReadOnly("Vasya", "Ivanov", 3000);// создаем объект с начальными данными

// Имя можно только читать, но нельзя поменять:
echo "Имя работника №1: ".$vasyaIvanov->getName() . "<br />";// выведет 'Vasya'
echo "Фамилия работника №1: ".$vasyaIvanov->getSurname() . "<br />";

// Зарплату можно и читать, и менять:
$vasyaIvanov->setSalary(2000);
echo "Зарплата работника №1: " . $vasyaIvanov->getSalary() . "<br />"; // Выведет 2000 $
//============//Exercise read-only
?>