<?php

class ArraySumHelper
{
    // Задает первую степень
    function getSum1($arr) {
        return $this->getSum($arr, 1);
    }

    // Задает вторую степень
    function getSum2($arr) {
        return $this->getSum($arr, 2);
    }

    // Задает третью степень
    function getSum3($arr) {
        return $this->getSum($arr, 3);
    }

    // Задает четвертую степень
    function getSum4($arr) {
        return $this->getSum($arr, 4);
    }

    // Принимает массив чисел и степень, в которую нужно возвести каждое число массива
    private function getSum($arr, $power) {
        $sum = 0;
        
        foreach ($arr as $elem) {
            $sum += pow($elem, $power);
        }

        return $sum;
    }
}

class ArrayAvgHelper
	{
		/*
			Находит сумму первых
			степеней элементов массива:
		*/
		public function getAvg1($arr)
		{
            return $this->getSum($arr, 1);
		}
		
		/*
			Находит сумму вторых степеней
			элементов массива и извлекает
			из нее квадратный корень:
		*/
		public function getAvg2($arr)
		{
            $sum = $this->getSum($arr, 2);
            return $this->calcSqrt($sum, 2);
		}
		
		/*
			Находит сумму третьих степеней
			элементов массива и извлекает
			из нее кубический корень:
		*/
		public function getAvg3($arr)
		{
            $sum = $this->getSum($arr, 3);
            return $this->calcSqrt($sum, 3);
		}
		
		/*
			Находит сумму четвертых степеней
			элементов массива и извлекает
			из нее корень четвертой степени:
		*/
		public function getAvg4($arr)
		{
            $sum = $this->getSum($arr, 4);
            return $this->calcSqrt($sum, 4);
		}
		
		/*
			Вспомогательный метод, который параметром
			принимает массив и степень и возвращает
			сумму степеней элементов массива:
		*/
		private function getSum($arr, $power)
		{
            $sum = 0;

            foreach($arr as $elem) {
                $sum += pow($elem, $power);
            }

            return $sum;
		}
		
		/*
			Вспомогательный метод, который параметром
			принимает целое число и степень и возвращает
			корень заданной степени из числа:
		*/
		private function calcSqrt($num, $power)
		{
            $extent = 1/$power;

            return pow($num, $extent);
		}
	}

?>