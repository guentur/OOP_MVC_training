<?php
require_once 'Class.php';

$disk = new Disk(3);
$quadrate = new Quadrate;
$rectangle = new Rectangle;

echo 'Периметр окружности: ' . $disk->getPerimeter() . "<br />";
echo 'Площадь окружности: ' . $disk->getSquare() . "<br />";

echo 'Периметр квадрата: ' . $quadrate->getPerimeter() . "<br />";
echo 'Площадь квадрата: ' . $quadrate->getSquare() . "<br />";

echo 'Периметр прямоугольника: ' . $rectangle->getPerimeter() . "<br />";
echo 'Площадь прямоугольника: ' . $rectangle->getSquare() . "<br />";

echo "<hr>";

$figuresCollection = new FiguresCollection;

$figuresCollection->setFigures($rectangle)->setFigures($quadrate)->setFigures($quadrate);
echo "<pre>";
var_dump($figuresCollection->figures) . "<br />";
echo 'Общий периметр добавленных фигур: ' . $figuresCollection->getTotalPerimeter() . "<br />";
echo 'Общая площадь добавленных фигур: ' . $figuresCollection->getTotalSquare() . "<br />";
?>