<?php
require_once "../classes/City.php";

$cities = [
    new City("Новая Каховка", 46044),
    new City("Херсон", 289697),
    new City("Харьков", 443200),
    new City("Киев", 2884000000),
    new City("Полтава", 284942)
];

foreach($cities as $city) {
    echo $city->getName() . 
        ' ' . $city->population . "население" .'<br />';
}


?>