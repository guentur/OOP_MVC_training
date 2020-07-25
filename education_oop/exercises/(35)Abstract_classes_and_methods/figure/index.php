<?php
require_once 'Class.php';

$rectangle = new Rectangle;

$rectangle->width = 20;
$rectangle->height = 10;
echo $rectangle->width  . "\n";

echo $rectangle->getSquare() . "\n";
echo $rectangle->getPerimeter() . "\n";

echo "<hr>";

echo $rectangle->getRatio() . "\n";
echo $rectangle->getSquarePerimeterSum() . "\n";

?>