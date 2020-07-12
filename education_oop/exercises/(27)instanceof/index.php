<?php
require_once 'Classes.php';

// ============================ Exercise 1
$employee1 = new Employee('Ваня', 2000);
$employee2 = new Employee('Коля', 1444);
$employee3 = new Employee('Вика', 2884);

$student1 = new Student('Вова', 100);
$student2 = new Student('Маша', 300);
$student3 = new Student('Миша', 200);

$arr = [
    $employee1, 
    $employee2, 
    $student3,
    $student1, 
    $employee3,
    $student2,
];

echo "<pre>";
foreach($arr as $people) {
    if($people instanceof Employee) {
        print_r($people);
    }
}

echo "<hr>";
foreach($arr as $people) {
    if($people instanceof Student) {
        print_r($people);
    }
}
echo "<hr>";
echo "<hr>";
function student($arr) {
    $sum = 0;
    foreach($arr as $people) {
        if($people instanceof Student) {
            $sum += $people->scholarship;
        }
    }
    return $sum;
}

function employee($arr) {
    $sum = 0;
    foreach($arr as $people) {
        if($people instanceof Employee) {
            $sum += $people->salary;
        }
    }
    return $sum;
}
echo student($arr) . '<br />';
echo employee($arr) . '<br />';
echo "<hr>";
// ============================ /Exercise 1/


// ============================ Exercise 2
$user1 = new User('Марія', 'Полегонько');
$user2 = new User('Олександр', 'Ткач');
$user3 = new User('Марія', 'Приймаченко');

$employees1 = new Employees('Вова', 'Полегонько', 60000);
$employees2 = new Employees('Костянтин', 'Наливайко', 100000);
$employees3 = new Employees('Олександр', 'Довженко', 43223333);

$сity1 = new City('Вишня', 60000);
$сity2 = new City('Черешня', 100000);
$сity3 = new City('Садок', 43223333);

$arr = [
    $user3,
    $user1,
    $user2,
    $employees1,
    $employees3,
    $employees2,
    $сity1,
    $сity2,
    $сity3,
];

foreach($arr as $elem) {
    if(!$elem instanceof User) {
        echo "<pre>";
        echo $elem->name;
    }
}
echo "<hr>";
foreach($arr as $elem) {
    if($elem instanceof User and !$elem instanceof Employees) {
        echo "<pre>";
        echo $elem->name;
    }
}



// ============================ /Exercise 2/

?>