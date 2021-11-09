<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/education_oop/practice/Exercises/(62,63,64,65,66,67)Tag/Tag.php';

class Image extends Tag {
    function __construct() {
        $this->setAttr('src', '')->setAttr('alt', '');
        // Вызовем конструктор родителя, передав имя тега:
        parent::__construct('img');
    }

    function __toString() {
        return parent::open();
    }
}


?>