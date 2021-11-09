<?php
/* 
/require/ - она работает подобно команде /include/, 
но не вставляет текст подключаемого файла прям в это место, 
а просто говорит PHP, чтобы он сделал доступными все переменные, 
функции и классы из подключаемого файла.

Более удобная практика - использовать команду /require_once/, 
которая подключает файл только если он не был подключен ранее:
*/

//Подключение класса User
require_once 'Employee.php';

$Vanya = new Employee("Vanya", "Gromov", "Vladimirovich", 25, 3000);
$Kyrylo = new Employee("Kyrylo", "Peretyatko", "Vladimirovich", 17, 8000);
echo "Привет, " . $Vanya->getSurname() . $Vanya->getName() . $Vanya->getPatronymic() . "<br />";
echo "Привет, " . $Kyrylo->getSurname() . $Kyrylo->getName() . $Kyrylo->getPatronymic();
echo "<hr />";

echo "Сумма зарплат Кирила и Вани: " . ($Vanya->getSalary() + $Kyrylo->getSalary()) . " $" . ", где зарплата Кирила: " . $Kyrylo->getSalary() . " $";

echo "<hr />";
echo "<hr />";

$s = array(1, 3, 5, 7, 8);

$b = print_r($s, true);
echo $b;

?>