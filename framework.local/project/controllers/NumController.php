<?php
namespace Project\Controllers;
use \Core\Controller as Controller;

class NumController extends Controller
{
	function sum($params) {
		$result = null;
		for ($i=1; $i < count($params) + 1; $i++) 
		{
			if(is_numeric($params['n'.$i])) {
				$result += $params['n'.$i];
			} else {
				echo "Под $i номером передан не потдерживаемый тип данных. Принимаются только числа" . '<br>';
			}
		}
		echo $result;
	}
}