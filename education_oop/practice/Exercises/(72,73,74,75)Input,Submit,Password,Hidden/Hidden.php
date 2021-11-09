<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/education_oop/practice/Exercises/(62,63,64,65,66,67)Tag/Tag.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/education_oop/practice/Exercises/(72,73,74,75)Input,Submit,Password,Hidden/Input.php';


class Hidden extends Input
{
    //Магический метод __construct() Запускается при вызове класса.
    //Для типа hidden мы помещаем в конструктор функцию, унаследованную от класса Tag, который наследуется классом Input
    function __construct() {
        //Для типа hidden мы помещаем в конструктор функцию, унаследованную от класса Tag, который наследуется классом Input
        $this->setAttr('type', 'hidden');
        //В родительском конструкторе мы создаем тег инпут
        parent::__construct();
    }
}