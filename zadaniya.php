<!DOCTYPE html>
<html>
<head>
	<title>Задания</title>
</head>
<body>
<?php 

/*==================Работа с классами и объектами=======*/
/*
1) Сделайте класс Worker, в котором будут следующие public поля - name (имя), age (возраст), salary (зарплата).

Создайте объект этого класса, затем установите поля в следующие значения (не в __construct, а для созданного объекта) - имя 'Иван', возраст 25, зарплата 1000. Создайте второй объект этого класса, установите поля в следующие значения - имя 'Вася', возраст 26, зарплата 2000.

Выведите на экран сумму зарплат Ивана и Васи. Выведите на экран сумму возрастов Ивана и Васи.

2)Сделайте класс Worker, в котором будут следующие private поля - name (имя), age (возраст), salary (зарплата) и следующие public методы setName, getName, setAge, getAge, setSalary, getSalary.

Создайте 2 объекта этого класса: 'Иван', возраст 25, зарплата 1000 и 'Вася', возраст 26, зарплата 2000.

Выведите на экран сумму зарплат Ивана и Васи. Выведите на экран сумму возрастов Ивана и Васи.

3)Дополните класс Worker из предыдущей задачи private методом checkAge, который будет проверять возраст на корректность (от 1 до 100 лет). Этот метод должен использовать метод setAge перед установкой нового возраста (если возраст не корректный - он не должен меняться).
*/

//////////////Number = 1
// class WorkerN1 {
// 	public $name;
// 	public $age;
// 	public $salary;
// }

// $worker1 = new WorkerN1;
// $worker2 = new WorkerN1;

// $worker1->name = "Иван";
// $worker1->age = 25;
// $worker1->salary = 1000;

// $worker2->name = "Вася";
// $worker2->age = 26;
// $worker2->salary = 2000;

// echo "<pre>";
// var_dump($worker2);
// var_dump($worker1);

// echo "Возраст: " . ($worker1->age + $worker2->age) . "<br/>";
// echo "Зарплата: " . ($worker1->salary + $worker2->salary);
//////////////_Number = 1

//////////////Number = 2
class WorkerN2 {
	private $name;
	private $age;
	private $salary;

	function setName($str) {
		return $this->name = "Привет, " . $str;
	}
	function getName() {
		
	}

	function setAge($str) {
		return $this->age = $str;
	}
	function getAge() {
		
	}

	function setSalary($str) {
		return $this->salary = $str;
	}
	function getSalary() {

	}
}

$client1 = new WorkerN2;
$client2 = new WorkerN2;

$client1->setName("Иван");
$ageIvan = $client1->setAge(25);
$salaryIvan = $client1->setSalary(1000);

$client2->setName("Вася");
$ageVasya = $client2->setAge(26);
$salaryVasya = $client2->setSalary(2000);

echo ($ageIvan+$ageVasya)."<br />";
echo ($salaryIvan+$salaryVasya);
//////////////_Number = 2
/*=================// .Работа с классами и объектами=====*/

?>
</body>
</html>