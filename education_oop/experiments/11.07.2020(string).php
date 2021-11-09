<?php

var_dump(01 == "ab"); // 0 == 0 -> true
var_dump((integer)'ba');
$b = 'ba';
var_dump(intval($b));
// echo 1 <=> 1; // 0

echo "Преобразование строки в число<hr>";
?>

<?php
$foo = 10;            // $foo - это целое число
$str = '$foo';        // $str - это строка
$fst = (string) $foo; // $fst - это тоже строка

var_dump($str);
// Это напечатает "они одинаковы"
if ($fst === $str) {
    echo "они одинаковы";
}
echo "Проверка функций<hr>";
// $eee = '';
// var_dump(is_null($eee));
// if($a == null) {
//     echo "dddd";
// }


$str = 'abc';

var_dump($str['1']);
var_dump(isset($str['1']));

var_dump($str['1.0']);
var_dump(isset($str['1.0']));

var_dump($str['x']);
var_dump(isset($str['x']));

var_dump($str['2x']);
var_dump(isset($str['1x']));

echo "<pre>";
echo "<pre>";
echo "<pre>";

class foo {
    var $bar = 'I am bar.';
    var $quux = 'Привет, я quux';
}

$foo = new foo();
$bar = 'bar';
$baz = array('foo', 'bar', 'baz', 'quux');
echo "{$foo->$bar}\n"; // I am bar.
echo "{$foo->{$baz[3]}}\n"; // Привет, я quux
echo "{${$baz[0]}->{$baz[1]}}\n";// I am bar.

?>