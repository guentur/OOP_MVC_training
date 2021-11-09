<?php
require_once 'Traits.php';

class Test
{
    use Trait1, Trait2, Trait3 {
        //insteadof (переводится вместо чего-то) использовать метод первого трейта, ВМЕСТО второго
        Trait1::method insteadof Trait2;// В любом случае заменяем method второго трейта методом первого трейта
        Trait2::method insteadof Trait3;
        Trait1::method as method1;
        Trait2::method as method2;// метод второго трейта будет доступен как method2
        Trait3::method as method3;
    }

    function getSum() {
        return $this->method1() + $this->method2() + $this->method3();
    }
}