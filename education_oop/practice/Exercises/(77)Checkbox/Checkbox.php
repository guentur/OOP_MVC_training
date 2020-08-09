<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/education_oop/practice/Exercises/(62,63,64,65,66,67)Tag/Tag.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/education_oop/practice/Exercises/(72,73,74,75)Input,Submit,Password,Hidden/Hidden.php';

/* Вопрос:
    В 77 уроке реализован другой способ, но он не работает (закоментирован). 
    Я понимаю логику что чекбокс не отправляется, если не отметить его, но пример из урока не работает

    У себя я реализовал по другому
*/

class Checkbox extends Tag
{
    public function __construct()
    {
        $this->setAttr('type', 'checkbox');
        $this->setAttr('value', '1');
        parent::__construct('input');
    }
    
    public function open()
    {
        //получаем значение атрибута name у чекбокса
        $nameCheckbox = $this->getAttr('name');
        //если значение атрибута name задано
        if ($nameCheckbox) {
            //создаем скрытый ИНПУТ со значением "0" (Всегда будет отправляться в форме)
            $hidden = (new Hidden)->setAttr('name', 'hidden')->setAttr('value', '0');
            //получаем имя скрытого инпута
            $nameHidden = $hidden->getAttr('name');
            
            //если есть REQUEST (запрос) на сервер со значением или ЧЕКБОКСА
            if (isset($_REQUEST[$nameCheckbox])) {
                //задаем атрибут checked (так как checked не имеет ЗНАЧЕНИЯ передаем в родительский метод setAttr вместо второго параметра(ЗНАЧЕНИЯ) true)
                $this->setAttr('checked', true);
                // //работает и без true
                // $this->setAttr('checked');
                    //если есть REQUEST (запрос) на сервер со значением или СКРЫТОГО ИНПУТА
            } else if (isset($_REQUEST[$nameHidden])) {
                //удаляем атрибут checked
                $this->removeAttr('checked');
            }
            
            return $hidden->open() . parent::open();
            // //Может работать и без $hidden->open()
            // return parent::open();
        } else {
            return parent::open();
        }
    }
    
    public function __toString()
    {
        return $this->open();
    }
}



// class Checkbox extends Tag
// {
//     function __construct() {
//         $this->setAttr('type', 'checkbox');
//         $this->setAttr('value', '1');
//         parent::__construct('input');
//     }

//     function open() {
//         $name = $this->getAttr('name');

//         if($name) {
//             $hidden = (new Hidden)->setAttr('name', $name)->setAttr('value', '0');

//             if(isset($_REQUEST[$name])) 
//             {
//                 $value = $_REQUEST[$name];

//                 if($value == 1) {
//                     $this->setAttr('checked');
//                 } else {
//                     $this->removeAttr('checked');
//                 }
//             }
            
//             return $hidden->open() . parent::open();
//         } else {
//             return parent::open();
//         }
//     }

//     function __toString() {
//         return $this->open();
//     }
// }
