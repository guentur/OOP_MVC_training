
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
    <?php
    include $_SERVER['DOCUMENT_ROOT'] . '/education_oop/practice/Exercises/(56)Date/index.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/education_oop/practice/Exercises/(57)DateInterval/index.php';
    
    ?>

    <?php

    // $begin = new DateTime( '2025-12-31' );
    // $end = new DateTime( '2026-11-28' );
    // $end = $end->modify( '+1 day' );

    // $interval = new DateInterval('P1M');
    // echo "<pre>";
    // var_dump($interval);
    // $daterange = new DatePeriod($begin, $interval ,$end);

    // foreach($daterange as $date){
    //     echo $date->format("Y-m-d") . "<br>";
    // }

    // // текущая дата
    // $Now = new DateTime('2016-06-24');
    // echo $Now->format('Y-m-d') . "<br>"; // 2016-06-24

    // // интервал - 1 месяц
    // $Duration = new DateInterval('P1M'); 
    // // добавляем к текущему времени интервал
    // $Now->add( $Duration );
    // echo $Now->format('Y-m-d') . "<br>"; // 2016-07-24

    // // интервал 2 месяца
    // $Duration = new DateInterval('P2M'); 
    // // вычитаем с текущего времени интервал
    // $Now->sub( $Duration );
    // echo $Now->format('Y-m-d') . "<br>"; // 2016-05-24

    // $Date1 = new DateTime();
    // $Date2 = new DateTime();
    // $Date2->add("P1Y");
    // var_dump($Date2);
    // $Difference = $Date1->diff( $Date2 );
    // echo $Difference->days; // выведет "365"
    ?>
</body>
</html>