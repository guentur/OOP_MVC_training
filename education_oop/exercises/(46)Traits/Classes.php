<?php

trait Helper
{
    private $name;
    private $age;
    private $population;

    function getName() {
        return $this->name;
    }

    function getAge() {
        return $this->age;
    }

    function getPopulation() {
        return $this->population;
    }
}

class User
{
    use Helper;

    function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
}

class Country
{
    use Helper;

    function __construct($name, $age, $population) {
        $this->name = $name;
        $this->age = $age;
        $this->population = $population;
    }
}


trait Trait1
{
    private function method1() {
        return 1;
    }
}

trait Trait2
{
    private function method2() {
        return 2;
    }
}

trait Trait3
{
    private function method3() {
        return 3;
    }
}

class Test
{
    use Trait1, Trait2, Trait3;

    function getSum() {
        return $this->method1() + $this->method2() + $this->method3();
    }
}
