<?php

abstract class Figure
{
    abstract protected function getSquare();
    abstract protected function getPerimeter();

    function getRatio() {
        return $this->getSquare() / $this->getPerimeter();
    }

    function getSquarePerimeterSum() {
        return $this->getSquare() + $this->getPerimeter();
    }
}

class Rectangle extends Figure
{
    private $width = 10;
    private $height;

    function __get($property) {
        return $this->$property;
    }
    function __set($property, $value) {
        $this->$property = $value;
    }

    public function getSquare() {
        return $this->width * $this->height;
    }

    public function getPerimeter() {
        return $this->width * 2 + $this->height * 2;
    }
}