<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/education_oop/practice/Exercises/(62,63,64,65,66,67)Tag/Tag.php';

class Textarea extends Tag
{
    function __construct() {
        parent::__construct('textarea');
    }

    //переопределяем функцию open(), наследуемую от класса Tag
    /*=== Для сохранения значений, записанных в инпуты ===*/
    function open()
    {
        //Получаем значения(value) атрибутов name
        $value = $this->getAttr('name');

        //если значение атрибута name существует
        if($value) {
            //Если запрос с определенным значением отправлен
            if(isset($_REQUEST[$value])) {
                //Сохраняем (записываем) значения в атрибут value, чтобы после обновления страницы значения не пропали
                $this->setText($_REQUEST[$value]);
            }
        }
        return parent::open();
    }

    //Для запуска открывания тега без необходимости прописывать запуск метода при использовании объекта
    //магический метод __toString() запускается при попытке прочитать екземпляр класса в строке (echo)
    function __toString() {
        return $this->show();
    }
}