<?php
require_once 'Product.php';

$cart = new Cart;
$cart->add( new Product('Mouse', 1000, 1) );
$cart->add( new Product('Mouse', 1000, 1) );
$cart->add( new Product('Mouse', 1000, 1) );
$cart->add( new Product('Mouse', 1000, 1) );

print_r($cart->products);
echo "<hr>";
// print_r($cart->search('sss'));
echo "<hr>";
echo $cart->getTotalPrice() . "<br />";
echo $cart->getAvgPrice() . "<br />";

?>