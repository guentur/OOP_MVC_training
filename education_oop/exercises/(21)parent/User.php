<?php

class User
{
    private $age;
    private $name;

    function setAge($age) {
        if($age >= 18) {
           $this->age = $age; 
        } 
    }
    function getAge() {
        return $this->age; 
    }

    function setName($name) {
        if(iconv_strlen($name) >= 3) {
            $this->name = $name;
        } else {
            echo "В имени должно быть не меньше трех символов";
        }
    }
    function getName() {
        return $this->name;
    }
}

class Student extends User
{
    private $course;

    function setCourse($course) {
        $this->course = $course;
    }
    function getCourse() {
        return $this->course;
    }

    function setAge($age) {
        if($age < 25) {
            parent::setAge($age);
        } 
    }

    function setName($name) {
        if(iconv_strlen($name) < 10) {
            parent::setName($name);
        } else {
            echo "Имя должно содержать не более 10  символов";
        }
    }
}

?>