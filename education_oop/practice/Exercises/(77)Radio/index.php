<?php
include $_SERVER['DOCUMENT_ROOT'] . '/education_oop/practice/Exercises/menu.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/education_oop/practice/Exercises/(71)Form/Form.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/education_oop/practice/Exercises/(72,73,74,75)Input,Submit,Password,Hidden/Input.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/education_oop/practice/Exercises/(72,73,74,75)Input,Submit,Password,Hidden/Submit.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/education_oop/practice/Exercises/(72,73,74,75)Input,Submit,Password,Hidden/Hidden.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/education_oop/practice/Exercises/(77)Radio/Radio.php';


$form = (new Form)->setAttrs(['action' => '', 'method' => 'GET']);
$radio = new Radio;
echo $form->open();
    echo $radio->setAttr('name', 'radio');
    echo $radio->setAttr('name', 'radio');
    echo $radio->setAttr('name', 'radio');
    echo $radio->setAttr('name', 'radio');
    echo (new Input)->setAttr('name', 'user');
    echo new Submit;
echo $form->close();