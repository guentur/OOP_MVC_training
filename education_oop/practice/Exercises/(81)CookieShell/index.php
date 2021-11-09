<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/education_oop/practice/Exercises/(81)CookieShell/CookieShell.php';

$cookie = new CookieShell;
$name = 'Vanya';
$count = 1;


if(isset($_COOKIE[$name])) {
	$obn = $_COOKIE[$name] + 1;
	$cookie->set($name, (int) $obn, 60*60);
} else {
	$cookie->set($name, (int) 1, 60*60);
}

echo "Количество обновлений = " . $cookie->get($name);
?>