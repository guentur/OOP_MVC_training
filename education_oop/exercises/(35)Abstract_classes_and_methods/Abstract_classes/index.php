<?php
require_once 'Users.php';

$student = new Student;

$student->setScholarship(2222);
$student->setName('Артем');
$student->increaseRevenue(22);

echo $student->getScholarship();
echo $student->getName();

echo '<hr>';

$employee = new Employee;

$employee->setSalary(2);
$employee->setName('Вова');
$employee->increaseRevenue(11322);
$employee->decreaseRevenue(24);

echo $employee->getSalary();
echo $employee->getName();
?>