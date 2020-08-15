<?php
//Для работы меню нужно использовать класс Link
require_once $_SERVER['DOCUMENT_ROOT'] . '/education_oop/practice/Exercises/(69)Link/Link.php';

$div = new Tag('div');
$div->setAttrs(['style'=>"float: right"]);

echo $div->open();

echo (new Tag('div'))
    ->setText((new Link())->setAttr('href', '/education_oop/practice/Exercises/(69)Link/')->setText('Задания класс Link')->show())
    ->show();
echo (new Tag('div'))
    ->setText((new Link())->setAttr('href', '/education_oop/practice/Exercises/(68)classImage/')->setText('Задания класс Image')->show())
    ->show();
echo (new Tag('div'))
    ->setText((new Link())->setAttr('href', '/education_oop/practice/Exercises/(62,63,64,65,66,67)Tag/')->setText('Задания класс Tag (полная реалиация)')->show())
    ->show();
echo (new Tag('div'))
    ->setText((new Link())->setAttr('href', '/education_oop/practice/Exercises/(57)DateInterval/')->setText('Задания класс DateInterval')->show())
    ->show();
echo (new Tag('div'))
    ->setText((new Link())->setAttr('href', '/education_oop/practice/Exercises/(56)Date/')->setText('Задания класс Date')->show())
    ->show();
echo (new Tag('div'))
    ->setText((new Link())->setAttr('href', '/education_oop/practice/Exercises/(70)HtmlList/')->setText('Задания класс HtmlList')->show())
    ->show();
echo (new Tag('div'))
    ->setText((new Link())->setAttr('href', '/education_oop/practice/Exercises/(71)Form/')->setText('Задания класс Form')->show())
    ->show();
echo (new Tag('div'))
    ->setText((new Link())->setAttr('href', '/education_oop/practice/Exercises/(72,73,74,75)Input,Submit,Password,Hidden/')->setText('Задания класс Input, Submit, Password, Hidden')->show())
    ->show();
echo (new Tag('div'))
    ->setText((new Link())->setAttr('href', '/education_oop/practice/Exercises/(76)Textarea/')->setText('Задания класс Textarea')->show())
    ->show();
echo (new Tag('div'))
    ->setText((new Link())->setAttr('href', '/education_oop/practice/Exercises/(77)Checkbox/')->setText('Задания класс Checkbox')->show())
    ->show();
echo (new Tag('div'))
    ->setText((new Link())->setAttr('href', '/education_oop/practice/Exercises/(77)Radio/')->setText('Задания класс Radio')->show())
    ->show();
echo (new Tag('div'))
    ->setText((new Link())->setAttr('href', '/education_oop/practice/Exercises/(78)Select/')->setText('Задания класс Select')->show())
    ->show();

echo $div->close();
// ->setAttrs(['style'=>"float: right"])

?>