<?php
class Employee 
{
	private $name;
	private $surname;
    private $patronymic;
    private $age;

    private $salary;
    
    //Метод-конструктор для класса Employee 
    function __construct ($name, $surname, $patronymic, $age, $salary) {
        $this->name = $name;
        $this->surname = $surname;
		$this->patronymic = $patronymic;
        $this->age = $age;
        
		$this->salary = $salary;
    }

	// Метод для чтения имени юзера:
	function getName() {
		return $this->name;
    }
    // Метод для чтения имени юзера:
	function getSurname() {
		return $this->surname;
    }
    // Метод для чтения имени юзера:
	function getPatronymic() {
		return $this->patronymic;
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
		return $this->salary;
	}

	//Проверка на корректность возраста к заданным данным:
	private function isAgeCorrect($age) {
		return  $age >= 1 and $age <= 130;
	}
}


?>