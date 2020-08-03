<?php

require_once './Classes/(57)dateInterval.php';
require_once '(56)Date.php';

$date1 = new Date('2025-12-31');
$date2 = new Date('2026-11-28');

$interval = new Interval($date1, $date2);

echo $interval->toDays() . "<br>" . "<br>"; // выведет разницу в днях
echo $interval->toMonths() . "<br>"; // выведет разницу в месяцах
echo $interval->toYears() . "<br>";  // выведет разницу в годах

var_dump($interval->arr); // массив вида ['years' =>'', 'months' => '', 'days' => ''] 
         
