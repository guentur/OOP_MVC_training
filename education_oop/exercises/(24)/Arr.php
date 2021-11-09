<?php

// Урок 23. В классе можно создавать объекты других классов и в полной мере с ними взаимодействовать. 
// Наблюдения: Сначала нужно создать пустое свойство, а объект создается в конструкторе, по другому возникнет ошибка

class Arr
{
    private $nums = [];
    private $sumHelper;
    private $avgHelper;

    function __construct() {
        $this->sumHelper = new SumHelper;
        $this->avgHelper = new AvgHelper;
    }

    public function add($number) {
        $this->nums[] = $number;
    }

    function getSum23() {
        $nums = $this->nums;

        return $this->sumHelper->getSum2($nums) +
                $this->sumHelper->getSum3($nums);
    }

    //Возвращает сумму среднего арифметического 
    //и среднего квадратичного из массива $this->nums
    function getAvgMeanSum() {
        $nums = $this->nums;

        return $sum = $this->avgHelper->getAvg($nums) + 
                $this->avgHelper->getMeanSquare($nums);
    }
}

class SumHelper
{
    function getSum2($arr) {
        return $this->getSum($arr, 2);
    }

    function getSum3($arr) {
        return $this->getSum($arr, 3);
    }

    //Возвращает сумму елементов массива в указанной степени($power)
    function getSum($arr, $power) {
        $sum = 0;

        foreach($arr as $elem) {
            $sum += pow($elem, $power);
        }

        return $sum;
    }
}
//=============================

class AvgHelper
{
    private $sumHelper;

    function __construct() {
        $this->sumHelper = new SumHelper;
    }

    //Возвращает среднее арифмитическое елементов массива ($arr)
    function getAvg($arr) {
        $sum = $this->sumHelper->getSum($arr, 1);

        return $sum/count($arr);
    }

    /* среднее квадратичное этого массива 
    (квадратный корень, извлеченный из суммы квадратов элементов,
    деленной на количество). */
    function getMeanSquare($arr) {
        $sum = $this->sumHelper->getSum2($arr) + 
                $this->sumHelper->getSum2($arr);

        $averange = $sum/count($arr);

        return $meanSquare = pow($averange, 1/2);
    }
}


?>




