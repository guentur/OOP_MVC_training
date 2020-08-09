<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/education_oop/practice/Exercises/(62,63,64,65,66,67)Tag/Tag.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/education_oop/practice/Exercises/(72,73,74,75)Input,Submit,Password,Hidden/Hidden.php';

class Radio extends Tag
{
    public function __construct()
    {
        $this->setAttr('type', 'radio');
        $this->setAttr('value', '1');
        parent::__construct('input');
    }
    
    function open() {
        $nameRadio = $this->getAttr('name');

        if($nameRadio) {
            $hidden = (new Hidden)->setAttr('name', $nameRadio)->setAttr('value', "0");
            $nameHidden = $hidden->getAttr('name');

            // if(isset($_REQUEST[$nameRadio])) {
            //     $this->setAttr('checked', true);
            // } else if (isset($_REQUEST[$nameHidden])) {
            //     $this->removeAttr('checked');
            // }

            if(isset($_REQUEST[$nameRadio])) {
                $value = $_REQUEST[$nameRadio];
                var_dump($value);
                if($value == 1) {
                    $this->setAttr('checked', true);
                } else {
                    $this->removeAttr('checked');
                }
            }
            return $hidden->open() . parent::open();

        } else {
            return parent::open();
        }
    }

    function __toString() {
        return (string) $this->open();
    }
}
