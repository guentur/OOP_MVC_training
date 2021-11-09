<?php
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


//get (getter) - получить
//set (setter) - установить 
class Employee 
{
	private $name;
	private $age;
	private $salary;

	function setName($name) {
		$this->name = $name;
	}
	function getName() {
		return $this->name;
	}

	function setAge($age) 
	{
		if($this->isAgeCorrect($age)) {
			$this->age = $age;
		}		
	}
	function getAge() {
		return $this->age;
	}

	function setSalary($salary) {
		$this->salary = $salary;
	}
	function getSalary() {
		return $this->salary . " $";
	}

	private function isAgeCorrect($age) {
		return  $age >= 1 and $age <= 130;
	}
}

$valera = new Employee;
$valera->setAge(3);
echo "Возраст Валеры: " . $valera->getAge() . "<br />";

$valera->setSalary(3000);
echo "Зарплата Валеры: " . $valera->getSalary();


?>