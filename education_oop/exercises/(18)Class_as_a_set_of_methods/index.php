<?php
require_once "ArraySumHelper.php";

$arraySumHelper = new ArraySumHelper;

$array = [2, 5, 5, 3];
echo $arraySumHelper->getSum1($array);
echo "<hr>";

$arrayAvgHelper = new ArrayAvgHelper;

// Вывести сумму елементов массива в первой степени
echo $arrayAvgHelper->getAvg1($array, 1) . "<br />";
// Вывести корень 2 степени из суммы елементов массива во второй степени
echo $arrayAvgHelper->getAvg2($array, 1) . "<br />";
// Вывести корень 2 степени из суммы елементов массива в третей степени
echo $arrayAvgHelper->getAvg3($array, 1) . "<br />";
// Вывести корень 2 степени из суммы елементов массива в четвертой степени
echo $arrayAvgHelper->getAvg4($array, 1) . "<br />";
?>