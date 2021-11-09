<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/education_oop/practice/Exercises/(84)Validator/Validator.php';

$valid = new Validator;

var_dump($valid->inRange(5, 1, 4));

var_dump($valid->inLength('vasya', 1, 5));


?>