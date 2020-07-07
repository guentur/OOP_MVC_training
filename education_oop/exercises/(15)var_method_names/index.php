<?php
include "User.php";

$user = new User('Kolya', 2);

$methods = ['getName', 'getAge'];
echo $user->{$methods[0]}() . "<br />";
echo $user->{$methods[1]}();
?>