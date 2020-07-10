<?php

// Урок 23. В классе можно создавать объекты других классов и в полной мере с ними взаимодействовать. 
// Наблюдения: Сначала нужно создать пустое свойство, а объект создается в конструкторе, по другому возникнет ошибка
require_once 'Arr.php';

$arr = new Arr();
$arr->add(5);
$arr->add(5);
$arr->add(5);

echo $arr->getSum23();

echo "<hr>";


$numbers = [5, 5, 5];
$avgHelper = new AvgHelper;

echo $avgHelper->getAvg($numbers) . "<br />";

echo $avgHelper->getMeanSquare($numbers) . "<br />";

echo $arr->getAvgMeanSum();
?>