<?php
include $_SERVER['DOCUMENT_ROOT'] . '/education_oop/practice/Exercises/(56)Date/Date.php';

include $_SERVER['DOCUMENT_ROOT'] . '/education_oop/practice/Exercises/menu.php';
// echo (new Date('2025-12-31'))->addDay(1) . "Проверка";  // '2026-01-01' 
// // date("y.m.d")
// $date = new Date();
// // $date->setDate('03.08.2020');
// echo $date->getDay() . "<br>";
// echo $date->getMonth('en') . "<br>";
// echo $date->getYear() . "<br>";

// echo $date->getWeekDay('en') . "<br>";


// echo "<hr>";

// $date->addDay(2);
// $date->subDay(3);

// echo $date->getDay() . "<br>";
// echo $date->getMonth('en') . "<br>";
// echo $date->getYear() . "<br>";

// echo $date->getWeekDay('en') . "<br>";

$date = new Date('2025-12-31');
	
	echo $date->getYear() . "<br>";  // выведет '2025'
	echo $date->getMonth() . "<br>"; // выведет '12'
	echo $date->getDay() . "<br>";   // выведет '31'
	
	echo $date->getWeekDay() . "<br>";     // выведет '3'
	echo $date->getWeekDay('ru') . "<br>"; // выведет 'среда'
    echo $date->getWeekDay('en') . "<br>"; // выведет 'wednesday'
    
    echo (new Date('2025-12-31'))->addYear(1) . "<br>"; // '2026-12-31' 
	echo (new Date('2025-12-31'))->addDay(1) . "<br>";  // '2026-01-01' 
	
	echo (new Date('2025-12-31'))->subDay(3)->addYear(1) . "<br>"; // '2026-12-28'
?>