<?php
require_once 'Users.php';

$usersCollection = new UsersCollection;
	
	$usersCollection->add(new Student('Петя', 100));
	$usersCollection->add(new Student('Ваня', 200));
	
	$usersCollection->add(new Employee('Коля', 300));
	$usersCollection->add(new Employee('Вася', 400));
	
	// Получим полную сумму стипендий:
	echo $usersCollection->getTotalScholarship() . "\n"; // выведет 300
	
	// Получим полную сумму зарплат:
	echo $usersCollection->getTotalSalary() . "\n"; // выведет 700
	
	// Получим полную сумму платежей:
	echo $usersCollection->getTotalPayment() . "\n"; // выведет 1000

?>