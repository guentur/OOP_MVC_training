<?php

class Validator
{
	public function isEmail($str)
	{
		// проверяет строку на то, что она корректный email
	}
	
	public function isDomain($str)
	{
		// проверяет строку на то, что она корректное имя домена
	}
	
	public function inRange($num, $from, $to)
	{
		// проверяет число на то, что оно входит в диапазон
		if(is_numeric($num)) 
		{
			if($from <= $num && $num <= $to) {
				return true;
			} else {
				return false;
			}
		} else {
			return "введен не потдерживаемый тип данных";
		}
		
	}
	
	public function inLength($str, $from, $to)
	{
		// проверяет строку на то, что ее длина входит в диапазон
		if(is_string($str)) 
		{
			if($from <= strlen($str) && strlen($str) <= $to) {
				return true;
			} else {
				return false;
			}
		} else {
			return "введен не потдерживаемый тип данных";
		}
		
	}
}