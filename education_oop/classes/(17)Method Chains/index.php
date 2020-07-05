<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    require_once 'Arr.php';

    $arr = new Arr;
    // Упрощаем вывод информации
    echo $arr->add(1)->add(8)->append([8, 3, 9])->add(2)->add(3)->append([10, 10, 10])->add(3)->getSum();
    echo "<br />";
    echo "<pre>";
    var_dump($arr->getNumbers());
    echo "<hr />";
    //==============================

    $user = new User;
    echo $user->setName("Иван")->setPatronymic("Иванов")->setSurname("Иванович")->getFullName();
    ?>  

</body>
</html>
