<?php
require_once 'Product.php';

$cart = new Cart;
$cart->add( new Product('Mouse', 1000, 1) );
$cart->add( new Product('Каша', 200, 2) );
$cart->add( new Product('Вова', 1000, 1) );
// $cart->add( new Product('Mouse', 1000, 1) );
// $cart->add( new Product('Mouse', 1000, 1) );
// $cart->add( new Product('Mouse', 1000, 1) );

echo "<pre>";
print_r($cart->products);

echo "<hr>";
print_r($cart->search('Каша'));
$cart->remove('Каша');
print_r($cart->products);
echo "<hr>";

echo $cart->getTotalPrice() . "<br />";
echo $cart->getAvgPrice() . "<br />";

echo "<hr>";
echo $cart->remove('Каша');
echo "<hr>";
echo "<hr>";

$mass = [1,3,6,2];
var_dump($mass);

unset($mass[1]);
sort($mass);
var_dump($mass);
?>