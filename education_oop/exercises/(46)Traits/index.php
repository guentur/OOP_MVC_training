<?php
require_once 'Classes.php';

$user = new User("Коля", 15);

echo $user->getName() . "\n";
echo $user->getAge() . "<br>";

$country = new Country('Страна чудес', 8000, 100000);

echo $country->getName() . "\n";
echo $country->getAge() . "\n";
echo $country->getPopulation() . "\n";

echo "<hr />";

$test = new Test;

echo $test->getSum() . "\n";
?>