<?php
require_once 'User.php';

$student = new Student;

$student->setAge(23); // Установит возраст 23, так как он проходит проверку
echo $student->getAge() . "<br />";

$student->setAge(30);// Не установит возраст 30, так как он не проходит проверку
echo $student->getAge() . "<br />";


$student->setName('Артем');
echo $student->getName() . "<br />";
?>