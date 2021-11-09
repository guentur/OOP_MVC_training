<?php
require_once 'Class.php';

$obj1 = new User('Алексей', 4);
$obj2 = new User('Алексей', 3);



function compare($obj1, $obj2) {
    if($obj1 === $obj2) {
        echo "1";
        return 1;
    } else {
        if($obj1 == $obj2) {
            echo "0";
            return 0;
        } else {
            echo "-1";
            return -1;
        }
    }
}

compare($obj1, $obj2);

echo "<hr>";

$employee1 = new Employee('Кума', 3200);
$collection = new EmployeesCollection();
$collection->add(new Employee('Вова', 3200));
$collection->add(new Employee('Алекс', 3000));
$collection->add(new Employee('Вова', 3200));
$collection->add(new Employee('Вова', 3200));
$collection->add(new Employee('Вова', 3200));
$collection->add($employee1);

echo "<pre>";
var_dump($collection->getEmployees()); // Выведет добавленных пользователей, которые прошли проверку на идентичность
// То есть добавило только работников, которые различаются по характеристикам лишь в одном параметре



?>