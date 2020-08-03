<?php
require_once '(56)Date.php';

class Interval
{
    private $date1;
    private $date2;
    public $arr = [
        'years' => '', 
        'months' => '', 
        'days' => ''
    ];

    public function __construct(Date $date1, Date $date2)
    {
        $this->date1 = $date1;
        $this->date2 = $date2;
    }
    
    public function toDays()
    {
        // вернет разницу в днях
        $difference = strtotime($this->date2->__toString()) - 
                strtotime($this->date1->__toString());

        $this->arr['days'] = $difference/60/60/24;
        return $difference/60/60/24;
    }
    
    public function toMonths()
    {
        // вернет разницу в месяцах
//         $objDate1 = $this->date1->__toString();
//         $objDate2 = $this->date2->__toString();

// //         $date2 = new DateTime("$objDate2");
// //         $date1 = new DateTime("$objDate2");
// // echo "<pre>";
// // var_dump($date1);

// //         $interval = $date2->diff($date1);

// // var_dump($interval);

// //         // return $interval->format('%m months');

// // var_dump($interval->format('%m months'));

        $difference = strtotime($this->date2->__toString()) - 
        strtotime($this->date1->__toString());

        $this->arr['months'] = $difference/60/60/24/30.4166667;
        return $difference/60/60/24/30.4340278;

//     $first_date = new DateTime("$objDate1");
//     $second_date = new DateTime("$objDate2");
    
//     $difference = $second_date->diff($first_date);

//     $this->arr['months'] = $difference->format("%m");
//     return $this->format_interval($difference);

    }
    
    public function toYears()
    {
        $difference = strtotime($this->date2->__toString()) - 
        strtotime($this->date1->__toString());

        $this->arr['years'] = $difference/60/60/24/30.4166667/12;
        return $difference/60/60/24/30.4340278/12;

        // $objDate1 = $this->date1->__toString();
        // $objDate2 = $this->date2->__toString();

        // // вернет разницу в годах
        // $first_date = new DateTime("$objDate1");
        // $second_date = new DateTime("$objDate2");

        // $interval = $second_date->diff($first_date);

        // $this->arr['years'] = $interval->format("%y");
        // return $interval->format("%y years ");

        // // return $this->format_interval($difference);
    }

    function format_interval(DateInterval $interval) {
        $result = "";
        if ($interval->y) { $result .= $interval->format("%y years "); }
        if ($interval->m) { $result .= $interval->format("%m months "); }
        if ($interval->d) { $result .= $interval->format("%d days "); }
        if ($interval->h) { $result .= $interval->format("%h hours "); }
        if ($interval->i) { $result .= $interval->format("%i minutes "); }
        if ($interval->s) { $result .= $interval->format("%s seconds "); }
    
        return $result;
    }

    public function __toString()
    {
        // выведет результат в виде массива
        // ['years' => '', 'months' => '', 'days' => '']
        $arr = [
            'years' => "$this->toYears()", 
            'months' => "$this->toMonths()", 
            'days' => "$this->toDays()"
        ];
        return $arr;
    }
}