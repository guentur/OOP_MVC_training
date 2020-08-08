<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/education_oop/practice/Exercises/(62,63,64,65,66,67)Tag/Tag.php';

class Input extends Tag
{
    public function __construct()
    {
        parent::__construct('input');
    }

    function open()
    {
        $inputName = $this->getAttr('name');

        if($inputName) {
            if(isset($_REQUEST[$inputName])) {
                $value = $_REQUEST[$inputName];
                $this->setAttr('value', $value);
            }
        }

        return parent::open();
    }

    function __toString() {
        return $this->open();
    }
}

class Submit extends Input
{
    function __construct() {
        $this->setAttr('type', 'submit');
        parent::__construct();
    }
}