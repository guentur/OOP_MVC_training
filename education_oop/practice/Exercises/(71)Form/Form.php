<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/education_oop/practice/Exercises/(62,63,64,65,66,67)Tag/Tag.php';

class Form extends Tag
{
    function __construct() {
        parent::__construct('form');
        $this->setAttrs(['action'=>'', 'method'=>'']);
    }
}