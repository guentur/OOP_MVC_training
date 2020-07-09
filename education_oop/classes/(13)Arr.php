<?php

class Arr 
{
    private $numbers = [];// задаем начальное значение свойства как []

    // function __construct() {
        
    //     $this->numbers[] = $num;
    // }

    //добавить числа в массив
    function add($num) {
        $this->numbers = $numb;
    }

    //метод выдает сумму чисел в массиве numbers
    function getSum() {
        return array_sum($this->numbers);
    }

    //подсчитать среднее значение чисел в массиве
    function getAvg() {
        $sum = $this->getSum();
        $count = count($this->numbers);

        return ($sum/$count);
    }
}

$arr = new Arr;
// $num = [6, 5, 3, 8, 1];
$arr->add([6, 5, 3, 8, 1]);

// echo $arr->getSum();
echo $arr->getAvg();

?>