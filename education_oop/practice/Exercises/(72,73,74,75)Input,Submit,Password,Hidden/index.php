<?php
include $_SERVER['DOCUMENT_ROOT'] . '/education_oop/practice/Exercises/menu.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/education_oop/practice/Exercises/(71)Form/Form.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/education_oop/practice/Exercises/(72,73,74,75)Input,Submit,Password,Hidden/Input.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/education_oop/practice/Exercises/(72,73,74,75)Input,Submit,Password,Hidden/Password.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/education_oop/practice/Exercises/(72,73,74,75)Input,Submit,Password,Hidden/Submit.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/education_oop/practice/Exercises/(72,73,74,75)Input,Submit,Password,Hidden/Hidden.php';

//создаем форму
$form = (new Form())->setAttrs(['action' => '', 'method' => 'GET', 'name' => 'numbers']);

echo "<pre>";

echo $form->open();
    echo (new Input())->setAttr('name', 'n1') . "<br>";
    echo (new Input())->setAttrs(['name' => 'n2']) . "<br>";
    echo (new Input())->setAttrs(['name' => 'n3']) . "<br>";
    echo (new Input())->setAttrs(['name' => 'n4']) . "<br>";
    echo (new Input())->setAttrs(['name' => 'n5']) . "<br>";
    echo (new Submit) . "<br>";
echo $form->close();

echo (new Password)->setAttr('placeholder', 'Пароль') . "<br>";


//Проверка если существует запрос GET
if(isset($_GET['n1']) && isset($_GET['n2']) && isset($_GET['n3']) && isset($_GET['n4']) && isset($_GET['n5']))
{   
    //Производить действия если форма заполнена только числами
    if(is_numeric($_GET['n1']) && is_numeric($_GET['n2']) && is_numeric($_GET['n3']) && is_numeric($_GET['n4']) && is_numeric($_GET['n5']))
    {
    echo "Сумма: " . ($_GET['n1'] + $_GET['n2'] + $_GET['n3'] + $_GET['n4'] + $_GET['n5']);
    } else {
        echo "Все значения должны быть числами";
    }
} else {
    echo "Скрипт считает сумму введенных чисел";
}
