<?php

class TagHelper
{
	function open($name, $attrs = []) {
		$AttrtoStr = $this->getAttrsStr($attrs);
		return "<$name$AttrtoStr>";
	}

	function close($name) {
		return "</$name>";
	}

	function show($name, $text) {
		return "<$name>$text</$name>";
	}

	private function getAttrsStr($attrs) {
		
		if(!empty($attrs)) {
			$result = '';

			foreach($attrs as $name=>$value) {
				if ($value === true) {
					$result .= " $name";
				} else {
					$result .= " $name = \"$value\"";
				}
			}

			return $result;
		} else {
			return '';
		}
	}
}



?>