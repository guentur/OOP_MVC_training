<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/education_oop/practice/Exercises/namespace/Core/Controller.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/education_oop/practice/Exercises/namespace/Project/Controller.php';

echo (new \Core\Controller) . '<br>';
echo (new \Project\Controller);