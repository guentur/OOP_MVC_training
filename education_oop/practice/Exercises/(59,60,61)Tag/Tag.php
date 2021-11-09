<?php

class Tag
{
    private $name;
    private $attr = [];

    function __construct($name) {
        $this->name = $name;
    }

    function setAttr($name, $value) {
        $this->attr[$name] = $value;
        return $this;
    }

    function removeAttr($name) {
        unset($this->attr[$name]);
        return $this;
    }

    function open() {
        $name = $this->name;
        $attr = $this->getAttrsStr($this->attr);
        return "<$name$attr>";
    }

    function close() {
        return "</$this->name>";
    }

    private function getAttrsStr($arrAttr) {
        $result = '';
        if(!empty($arrAttr)) {
            foreach($arrAttr as $name=>$value) {
                $result .= " $name=\"$value\"";
            }
            return $result;
        } else {
            return '';
        }
    }
    
}

?>