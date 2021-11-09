<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/education_oop/practice/Exercises/(80)FormHelper/FormHelper.php';

$fh = new FormHelper();
	
echo $fh->openForm(['action' => '', 'method' => 'GET']);
	echo $fh->input(['name' => 'year']);
	echo $fh->checkbox(['name' => 'check']);
	echo $fh->textarea(['name' => 'sssssss']);
	echo $fh->select(
	['name' => 'list', 'class' => 'eee'],
	[
		['text' => 'item1', 'attrs' => ['value' => '1']],
		['text' => 'item2', 'attrs' => ['value' => '2']],
		['text' => 'item3', 'attrs' => ['value' => '3', 'class' => 'last']],
	]);
	echo $fh->submit();
echo $fh->closeForm();
?>