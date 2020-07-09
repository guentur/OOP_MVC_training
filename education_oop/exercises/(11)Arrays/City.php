<?php

class City 
{
    private $name;
    public $population;

    function __construct($name, $population) {
        $this->name = $name;
        $this->population = $population;
    }

    function getName() {
        return $this->name;
    }
}


?>