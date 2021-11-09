<?php
require_once "../classes/(14)Array_in_variable.php";

//=============================
$user = new User("Валера", 20);

$prop = 'name';
echo $user->$prop; // выведет 'Валера'
echo "<hr />";

//=============================
$city = new City("Новая Каховка", 1970, 42000);
$props = ['name', 'foundation', 'population'];

foreach($props as $value) {
    echo($city->$value) . "<br />";
}
echo "<hr />";

//=============================
$client = new Client("Ибрагимов", "Иван", "Петрович");
$propase = ['surname', 'name', 'patronymic'];

for($i = 0; $i < count($propase); $i++) {
    echo $client->{$propase[$i]} . "<br />";
}

?>