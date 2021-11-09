<?php
require_once 'User.php';

$student = new Student('Артем', 20, 1);

echo $student->getFullInformation();
echo "Course: " . $student->getCourse() . "<br />";
echo "Name: " . $student->getName() . "<br />";
echo "Age: " . $student->getAge() . "<br />";

echo "<hr>";

$employee = new Employee('Арарат', 'Макалов', "01.02.2000", 2000);

echo "Name: " . $employee->getName() . "<br />";
echo "Surname: " . $employee->getSurname() . "<br />";
echo "Birthday: " . $employee->getBirthday() . "<br />";
echo "Salary: " . $employee->getSalary() . "<br />";
?>