<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/education_oop/practice/Exercises/(68)classImage/Image.php';

$img = new Image();

echo $img->setAttr('src', 'dog.png')->setAttrs(['width' => 300, 'heigh' => 200]);

$qqq = new Image();
echo $qqq;