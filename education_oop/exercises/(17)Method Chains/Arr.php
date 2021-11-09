<?php
//Сменить кодировку по умолчанию
mb_internal_encoding("UTF-8");

//класс принимает массив чисел и считает сумму чисел
class Arr
{
    private $numbers = [];

    function add($num) {
        $this->numbers[] = $num;
        //Чтобы можно было вызывать методы по цепочке, нужно вернуть $this в предпоследнем методе в цепочке
        return $this;
    }

    function append($numer) {
        // Функция преобразования массива в строку
        $a = implode(",", $numer);
        // Добавить все элементы массива в переменной $numer в массив всех чисел
        for($i=0; $i < count($numer); $i++) {
            array_push($this->numbers, $numer[$i]);
        }
        //Чтобы можно было вызывать методы по цепочке, нужно вернуть $this в предпоследнем методе в цепочке
        return $this;
    }

    //Метод возвращает сумму чисел в массиве
    function getSum() {
        return array_sum($this->numbers);
        return $this;
    }
    //Метод возвращает сумму чисел в массиве
    function getNumbers() {
        return $this->numbers;
    }
}

class User
{
    private $surname;
    private $name;
    private $patronymic;

    function setSurname($surname) {
        $this->surname = $surname;
        return $this;
    }
    function setName($name) {
        $this->name = $name;
        return $this;
    }
    function setPatronymic($patronymic) {
        $this->patronymic = $patronymic;
        return $this;
    }

    function getFullName() {
        return mb_substr($this->surname, 0, 1) . mb_substr($this->name, 0, 1) . mb_substr($this->patronymic, 0, 1);
        return $this;
    }
}

?>