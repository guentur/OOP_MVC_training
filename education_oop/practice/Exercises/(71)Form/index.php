<?php
include $_SERVER['DOCUMENT_ROOT'] . '/education_oop/practice/Exercises/menu.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/education_oop/practice/Exercises/(71)Form/Form.php';

$form = (new Form)->setAttrs(['action' =>
		 'test.php', 'method' => 'GET']); 
	
    echo $form->open();
    echo "This is form";
		// здесь потом будут элементы формы
	echo $form->close();
?>