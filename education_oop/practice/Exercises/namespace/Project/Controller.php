<?php

namespace Project;

class Controller
{
	function __construct() {
		return "Hello World Project";
	}

	function __toString() {
		return (string) $this->__construct();
	}
}