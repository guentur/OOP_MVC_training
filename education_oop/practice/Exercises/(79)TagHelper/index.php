<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/education_oop/practice/Exercises/(79)TagHelper/TagHelper.php';

$tag = new TagHelper;

echo $tag->open('div', ['style'=>'background: red']) . 'Це тег ДІВ' . $tag->close('div');

echo $tag->show('div', 'Текст');


?>