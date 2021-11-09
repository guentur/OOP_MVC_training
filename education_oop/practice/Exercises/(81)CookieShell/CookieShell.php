<?php

class CookieShell
{
	function set($name, $value, $time)
	{
		// устанавливает куки
		// $time задает время в сек, через сколько кука умрет
		setcookie($name, $value, time() + $time);
		$_COOKIE[$name] = $value;
	}
	
	function get($name)
	{
		// получает куки
		return $_COOKIE[$name];
	}
	
	function del($name)
	{
		// удаляет куки
		setcookie($name, '', time() - 60);
		$_COOKIE[$name] = null;
	}
	
	function exists($name)
	{
		// проверяет наличие куки
		if (isset($_COOKIE[$name])) {
			return true;
		} else {
			return false;
		}
	}
}
