<?php
require_once 'Tag.php';
include $_SERVER['DOCUMENT_ROOT'] . '/education_oop/practice/Exercises/menu.php';
// // $input = new Tag('input', ['id' => 'test', 'class' => 'eee bbb']);
// $input = new Tag('input');
// $div = new Tag('div');
// $img = new Tag('img');
// $header = new Tag('header');

// echo $input->open();

// // $tag = new Tag('div');
// 	echo $div->setAttr('id', 'test')->setAttr('class', 'ooooo ddd hhh')->open() . "Привет"; // откроем тег
//     echo $div->close(); // закроем тег
    
//     echo $input->setAttr('id', 'test')->setAttr('placeholder', 'Привет, набери в меня что-то')->removeAttr('id')->open() . "<br>"; // откроем тег

$tag = new Tag('div');
	echo $tag->setAttr('id', 'test')->setAttr('class', 'ooooo ddd hhh')->open() . "Привет"; // откроем тег
    echo $tag->close(); // закроем тег
    
    var_dump($tag->getAttr('id'));
?>