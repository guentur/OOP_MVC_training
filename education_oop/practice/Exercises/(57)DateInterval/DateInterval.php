<?php

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

        $difference = strtotime($this->date2->__toString()) - 
        strtotime($this->date1->__toString());

        $this->arr['months'] = $difference/60/60/24/30.4166667;
        return $difference/60/60/24/30.4340278;

    }
    
    public function toYears()
    {
        $difference = strtotime($this->date2->__toString()) - 
        strtotime($this->date1->__toString());

        $this->arr['years'] = $difference/60/60/24/30.4166667/12;
        return $difference/60/60/24/30.4340278/12;

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