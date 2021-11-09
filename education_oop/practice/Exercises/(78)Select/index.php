<?php
include $_SERVER['DOCUMENT_ROOT'] . '/education_oop/practice/Exercises/menu.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/education_oop/practice/Exercises/(71)Form/Form.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/education_oop/practice/Exercises/(72,73,74,75)Input,Submit,Password,Hidden/Input.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/education_oop/practice/Exercises/(72,73,74,75)Input,Submit,Password,Hidden/Submit.php';

require_once $_SERVER['DOCUMENT_ROOT'] . '/education_oop/practice/Exercises/(78)Select/Select.php';
        
$form = (new Form)->setAttrs(['action' =>'', 'method' => 'GET']); 

echo $form->open();

    echo (new Input)->setAttr('name', 'test');
    echo ((new Select)->setAttr('name', 'list'))
        ->add( (new Option())->setText('item1') )
        ->add( (new Option())->setText('item2') )
        ->add( (new Option())->setText('item3') );
    echo new Submit;

echo $form->close();