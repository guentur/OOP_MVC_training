<?php
// abstract class aGetter
// {
//     function __get($property) {
//         return $this->$property;
//     }
// }

interface iFigure
{
    function getSquare();
    function getPerimeter();
}


class Disk implements iFigure
{
    private $radius;
    const PI = 3.1415;

    function __construct($radius) {
        $this->radius = $radius;
    }

    function getPerimeter() {
        return 2 * self::PI * $this->radius;
    }

    function getSquare() {
        return self::PI * pow($this->radius, 2);
    }
}

class Quadrate implements iFigure
{
    private $width = 5;

    function getPerimeter() {
        return $this->width * 4;
    }

    function getSquare() {
        return $this->width * $this->width;
    }
}

class Rectangle implements iFigure
{
    private $width = 2;
    private $height = 3;

    function getPerimeter() {
        return 2 * ($this->width + $this->height);
    }

    function getSquare() {
        return $this->width * $this->height;
    }
}

class FiguresCollection
{
    private $figures = [];

    function __get($property) {
        return $this->$property;
    }

    function setFigures(iFigure $figure) {
        $this->figures[] = $figure;

        return $this;
    }

    function getTotalSquare() {
        $sum = 0;

        foreach($this->figures as $figure) {
            $sum += $figure->getSquare();
        }

        return $sum;
    }

    function getTotalPerimeter() {
        $sum = 0;

        foreach($this->figures as $figure) {
            $sum += $figure->getPerimeter();
        }

        return $sum;
    }
}