<?php
require_once 'User.php';

$employee = new Employee;
	
	$employee->setSalary(1000)->setName('Коля')->setAge(25); // метод класса Employee
	// $employee->setName('Коля'); // метод унаследован от родителя
	// $employee->setAge(25) // метод унаследован от родителя
	
	echo $employee->getSalary() . "<br />"; // метод класса Employee
	echo $employee->getName() . "<br />"; // метод унаследован от родителя
    echo $employee->getAge() . "<br />"; // метод унаследован от родителя
    
echo "<hr>";

$student = new Student;

    $student->setCourse()->setName('Студент')->setAge(17)->setCourse()->setSpecialty("Программист")->addOneYear();

    echo $student->getCourse() . "<br />";
    echo $student->getName() . "<br />";
    echo $student->getAge() . "<br />";
    echo $student->getSpecialty() . "<br />";

echo "<hr>";

    $programmer = new Programmer(['C++']);
    $programmer->setName('Кирилл')->setAge(17)->setName('Кирилл')->setSalary(3000)->setLangs(["Java", "Python"]);
    echo "<pre>";
    print_r ($programmer->getLangs()) . "<br />";
    echo ($programmer->getAge()) . "<br />";
    echo ($programmer->getName()) . "<br />";
    echo ($programmer->getSalary()) . "<br />";

echo "<hr>";

$driver = new Driver("C", 3);
$driver->setName("Артем",)->setAge(20)->setSalary(2000)->setSpecialty("Водитель пассажирского автобуса");

echo $driver->getCategory() . "<br />";
echo $driver->getExperience() . "<br />";
echo $driver->getName() . "<br />";
echo $driver->getAge() . "<br />";
echo $driver->getSalary() . "<br />";
echo $driver->getSpecialty() . "<br />";
?>