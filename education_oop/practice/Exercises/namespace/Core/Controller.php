<?php

namespace Core;

class Controller
{
	function __construct() {
		return "Hello World";
	}

	function __toString() {
		return (string) $this->__construct();
	}
}