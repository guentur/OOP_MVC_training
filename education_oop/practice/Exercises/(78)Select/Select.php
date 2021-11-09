<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/education_oop/practice/Exercises/(62,63,64,65,66,67)Tag/Tag.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/education_oop/practice/Exercises/(72,73,74,75)Input,Submit,Password,Hidden/Hidden.php';

class Option extends Tag
{
    function __construct() {
        parent::__construct('option');
    }

    //Установить атрибут "selected"
    function setSelected() {
        $this->setAttr('selected', true);
        return $this;
    }

    //Метод для установки имени
    function name($name) {
        $this->setAttr('name', "$name");
        return $this;
    }

    function __toString() {
        return parent::show();
    }

}

class Select extends Tag
{
    //Все объекты option, вместо родительского текста
    private $text = [];

    function __construct() {
        parent::__construct('select');
    }

    //Добавить option, брать только екземпляры класса Option
    function add(Option $option) {
        $this->text[] = $option;
        return $this;
    }

    //Переделаем немного родительский метод open() (добавил сохранение option, после отправки формы)
    function open() {
        //Получим имя (значение атребута name) экземпляра класса select
        $name = $this->getAttr('name');

        //если есть ЗАПРОС с названием селекта
        if(isset($_REQUEST[$name])) {
            //перебрать массив с option-ами
            foreach($this->text as $option) {
                //Если значение option совпадает с запросом 
                if($option->getText() == $_REQUEST[$name]) {
                    //присвоить атрибут selected
                    $option->setSelected();
                }
            }
        }
        return parent::open();
    }

    function show() {
        //ложим в result метод open
        $result = $this->open();

        foreach($this->text as $option) {
            //перебираем массив и ложим между тегами закрытия и открытия option (который, с помощью магического метода __toString(), сделали тегом с текстом, вызвав метод show())
            $result .= $option;
        }
        //Добавляем конкатенацией в переменную result тег закрытия, тем самым закрывая наш select
        $result .= $this->close();

        return $result;
    }

    function __toString() {
        return $this->show();
    }
}