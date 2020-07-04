<?php
class User {
	public $name;
	public $age;

	// Метод для изменения возраста юзера:
	function setAge($age) {
		if($this->isAgeCorrect($age)) {
			$this->age = $age;// вычислим новый возраст
		}
	}

	// Метод для добавления к возрасту:
	function addAge($years) {
		$newAge = $this->age + $years;

		if($this->isAgeCorrect($newAge)) {
			$this->age = $newAge;// вычислим новый возраст
		}
	}

	function subAge($years) {
		$newAge = $this->age - $years;

		// Проверим возраст на корректность:
		if($this->isAgeCorrect($newAge)) {
			$this->age = $newAge;// обновим, если новый возраст прошел проверку
		}
	}

	// Метод для проверки возраста:
	private function isAgeCorrect($age) {
		return $age >= 18 and $age <= 60;//выводить проверку
	}
}

$obj_client = new User;
$obj_client->setAge(30);
$obj_client->addAge(1000);
$obj_client->subAge(20);
echo ( $obj_client->age );
echo "<hr>";

class Client 
{
	public $name;
	public $age;

	function isAgeCorrect($age) {
		return $age >= 18 and $age <= 60;
	}

	function setAge($age) {
		if($this->isAgeCorrect($age)) {
			$this->age = $age;
		}	
	}
}
$obj_client = new Client;
$obj_client->name = "Коля";
$obj_client->age = 25;
$obj_client->setAge(20);
echo ($obj_client->age);
echo "<hr>";

class Student 
{
	public $name;
	public $course;

	//метод для перевода студента на новый курс
	function transferToNextCourse($course) {
		$newCourse = $this->course + $course;

		if($this->isCourseCorrect($newCourse)) {
			$this->course = $newCourse;
		}
	}

	// Метод для проверки курса:
	private function isCourseCorrect($course) {
		return $course < 6 and $course > 0;
	}
}

$obj_student = new Student;
$obj_student->transferToNextCourse(5);

echo($obj_student->course);
echo "<hr>";


?>


