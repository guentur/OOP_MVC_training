<?php
//отображать все ошибки PHP
error_reporting(-1);

/* Установка внутренней кодировки в UTF-8 */ 
header('Content-Type: text/html; charset=UTF-8'); // Заголовок станицы с кодировкой (для корректного отображения в браузере)
mb_internal_encoding('UTF-8'); // Установка внутренней кодировки в UTF-8
mb_http_output('UTF-8'); // Установка кодировки UTF-8 входных данных HTTP-запроса
mb_http_input('UTF-8'); // Установка кодировки UTF-8 выходных данных HTTP-запроса
mb_regex_encoding('UTF-8'); // Установка кодировки UTF-8 для многобайтовых регулярных выражений 


class Date
{
    private $date;
    private $month = [
        "01"=>"Января",
        "02"=>"Февраля",
        "03"=>"Марта",
        "04"=>"Апреля",
        "05"=>"Мая",
        "06"=>"Июня", 
        "07"=>"Июля",
        "08"=>"Августа",
        "09"=>"Сентября",
        "10"=>"Октября",
        "11"=>"Ноября",
        "12"=>"Декабря"
    ];
    private $days = [
        "Воскресенье",
        "Понедельник",
        "Вторник",
        "Среда",
        "Четверг",
        "Пятница",
        "Субота", 
    ];

    function __construct($date = null) {
        // если дата не передана - пусть берется текущая
        if($date == '') {
            $this->date = date("Y.m.d");
            // echo "пустота";
        } else {
            $this->date = $date;
            // echo "полнота";
        }
    }

    // public function setDate($date) {
    //     if($date == '') {
    //         $this->date = date("y.m.d");
    //     } else {
    //         $this->date = $date;
    //     }
        
    // }

    public function getDay() {
        // возвращает день
        return date("d", strtotime($this->date)) . "\n";
    }

    public function getMonth($lang = null) {
        if($lang == 'ru') {
            return $this->month[ date('m', strtotime($this->date)) ] . "\n";
        } else if($lang == 'en') {
            return date('F', strtotime($this->date)) . "\n";
            // return strftime('%A', strtotime($this->date)) . "\n";
        }

        // возвращает месяц
                        //strtotime - возвращать дату в формате timestap
        return date('m', strtotime($this->date)) . "\n";
        // переменная $lang может принимать значение ru или en
        // если эта не пуста - пусть месяц будет словом на заданном языке
    }
    
    public function getYear() {
        // возвращает год
                        //strtotime - возвращать дату в формате timestap
        return date('Y', strtotime($this->date)) . "\n";
    }
    
    public function getWeekDay($lang = null) {
        // переменная $lang может принимать значение ru или en
        // если эта не пуста - пусть месяц будет словом на заданном языке
        // if($lang == 'en') {
        //     //установить локаль для 
        //     setlocale(LC_ALL, 'american');
        // } else if($lang == 'ru') {
        //     setlocale(LC_ALL, 'Russian_Russia.1251');
        // } else if($lang == 'ua') {
        //     setlocale(LC_ALL, 'ukrainian');
        // }
        // // возвращает день недели
        // return strftime('%A', strtotime($this->date)) . "\n";

        if($lang == 'ru') {
            // echo $this->date;
            return $this->days[ date('w', strtotime($this->date)) ];
        } else if($lang == 'en') {
            // echo $this->date . "ddd";
            return date('l', strtotime($this->date)) . "\n";
            // return strftime('%A', strtotime($this->date)) . "\n";
        }
        // echo $this->date;
        return date('w', strtotime($this->date)) . "\n";
    }
    
    public function addDay($value) {
        // добавляет значение $value к дню
        $date = date_create("$this->date");
        date_modify($date, "$value day");
        $this->date = date_format($date, 'Y.m.d');

        return $this;
    }
    
    public function subDay($value) {
        // отнимает значение $value от дня
        $date = date_create("$this->date");
        date_modify($date, "-$value day");
        $this->date = date_format($date, 'Y.m.d');

        return $this;
    }
    
    public function addMonth($value) {
        // добавляет значение $value к месяцу
        $date = date_create("$this->date");
        date_modify($date, "$value month");
        $this->date = date_format($date, 'Y.m.d');
        
        return $this;
    }
    
    public function subMonth($value) {
        // отнимает значение $value от месяца
        $date = date_create("$this->date");
        date_modify($date, "-$value month");
        $this->date = date_format($date, 'Y.m.d');
        
        return $this;
    }
    
    public function addYear($value) {
        // добавляет значение $value к году
        $date = date_create("$this->date");
        var_dump($date);
        date_modify($date, "+1 year");
        $this->date = date_format($date, 'Y.m.d');
        
        return $this;
    }
    
    public function subYear($value) {
        // отнимает значение $value от года
        $date = date_create($this->date);
        var_dump($date);
        date_modify($date, "-$value Year");
        $this->date = date_format($date, 'Y.m.d');
        
        return $this;
    }
    
    public function format($format) {
        // выведет дату в указанном формате
        // формат пусть будет такой же, как в функции date
        return date('Y.m.d' ,$this->date);
    }
    
    public function __toString() {
        // выведет дату в формате 'год-месяц-день'
        return (string) $this->date;
    }
}

