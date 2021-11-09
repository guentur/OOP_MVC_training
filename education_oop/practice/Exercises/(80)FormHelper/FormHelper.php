<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/education_oop/practice/Exercises/(79)TagHelper/TagHelper.php';

interface iFormHelper
{
	function openForm($attrs = []);
	function closeForm($attrs = []);
	function input($attrs = []);

	function submit($attrs = []);
	function password($attrs = []);
	function checkbox($attrs = []);
	function hidden($attrs = []);
}

class FormHelper extends TagHelper implements iFormHelper
{
	function openForm($attrs = []) {
		return $this->open('form', $attrs);
	}
	function closeForm($attrs = []) {
		return $this->close('form');
	}

	function input($attrs = []) 
	{
		if(isset($attrs['name'])) {
			$name = $attrs['name'];

			if(isset($_REQUEST[$name])) {
				$attrs['value'] = $_REQUEST[$name];
			}
		}

		return $this->open('input', $attrs);
	}

	function submit($attrs = []) 
	{
		$attrs['type'] = 'submit';
		return $this->open('input', $attrs);
	}

	function password($attrs = []) 
	{
		$attrs['type'] = 'password';
		return $this->input($attrs);
	}

	function hidden($attrs = []) 
	{
		$attrs['type'] = 'hidden';
		return $this->open('input', $attrs);
	}

	function checkbox($attrs = []) 
	{
		$attrs['value'] = '1';
		$attrs['type'] = 'checkbox';

		if(isset($attrs['name'])) {
			$name = $attrs['name'];

			if(isset($_REQUEST[$name]) && $_REQUEST[$name] == 1) {
				$attrs['checked'] = true;
			}
			$hidden = $this->hidden(['name'=>$name, 'value'=>'0']);
		} else {
			$hidden = '';
		}

		return $hidden . $this->open('input', $attrs);
	}

	function textarea($attrs = []) 
	{
		if(isset($attrs['name'])) {
			$name = $attrs['name'];

			if(isset($_REQUEST[$name])) {
				$attrs['value'] = $_REQUEST[$name];
				$text = $attrs['value'];
			} else {
				$text = '';
			}
		}

		return $this->open('textarea', $attrs) . $text . $this->close('textarea');
	}

	function option($text, $attrs = []) {
		return $this->open('option', $attrs) . $text . $this->close('option');
	}

	function select($attrs = [], $options = []) {
		$result = $this->open('select', $attrs);

		echo "<pre>";

		if(isset($attrs['name'])) {
			$name = $attrs['name'];

			
			for ($i=0; $i < count($options); $i++) {
				if(isset($_REQUEST[$name])) 
				{
					if($options[$i]['attrs']['value'] == $_REQUEST[$name]) 
					{
						$options[$i]['attrs']['selected'] = true;
					}
				}
				
				$text = $options[$i]['text'];
				$attrs = $options[$i]['attrs'];
			
				$result .= $this->option($text, $attrs);
			}
			
		} else {
			return 'для корректного отображения списка, дайте имя select';
		}

		$result .= $this->close('select');

		return $result;
	}
}


?>