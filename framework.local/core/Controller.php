<?php
	namespace Core;
	
	class Controller
	{
		protected $layout = 'default';

		//Это моя работа (возможно что-то не правильно)
		/**/protected $title = 'default';/**/
		/*===========================*/

		protected function render($view, $data = []) {
			return new Page($this->layout, $this->title, $view, $data);
		}
	}
