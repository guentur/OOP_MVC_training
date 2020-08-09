<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/education_oop/practice/Exercises/(62,63,64,65,66,67)Tag/Tag.php';

class Input extends Tag
{
    public function __construct()
    {
        parent::__construct('input');
    }

    //переопределяем функцию open(), наследуемую от класса Tag
    /*=== Для сохранения значений, записанных в инпуты ===*/
    function open()
    {
        //Получаем значения(value) атрибутов name
        $inputName = $this->getAttr('name');

        //если значение атрибута name существует
        if($inputName) {
            //Если запрос с определенным значением отправлен
            if(isset($_REQUEST[$inputName])) {
                $value = $_REQUEST[$inputName];
                //Сохраняем (записываем) значения в атрибут value, чтобы после обновления страницы значения не пропали
                $this->setAttr('value', $value);
            }
        }

        return parent::open();
    }

    //магический метод __toString() запускается при попытке прочитать екземпляр класса в строке (echo)
    function __toString() {
        return $this->open();
    }
}
