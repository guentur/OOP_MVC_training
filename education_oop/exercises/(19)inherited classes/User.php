<?php
//======================= 1 Уровень
class User
{
    private $name;
    protected $age;
    private $specialty;

    function setName($name) {
        if(is_string($name)) {
            $this->name = $name; /*= mb_substr($category, 0, 2); */
        } else {
            echo "Передан неподдерживаемый тип данных" . "<br />";
        }
        return $this;
    }
    function getName() {
        if(isset($this->name)) {
            return $this->name;
        } else {
            return "Этого значения нет в выбранном объекте";
        }
    }

    function setAge($age) {
        if(is_integer($age)) {
            $this->age = $age;
        }
        return $this;
    }
    function getAge() {
        if(isset($this->age)) {
            return $this->age;
        } else {
            return "Этого значения нет в выбранном объекте";
        }
    }

    function setSpecialty($specialty) {
        if(is_string($specialty)) {
            $this->specialty = $specialty;
        }
        return $this;
    }
    function getSpecialty() {
        if(isset($this->specialty)) {
            return $this->specialty;
         } else {
             return "Этого значения нет в выбранном объекте";
         }
    }

    // protected function ifGet($value) {
    //     if(isset($this->$value)) {
    //         return $this->$value;
    //      } else {
    //          return "Этого значения нет в выбранном объекте";
    //      }
    // }
}
//=================================== /* 1 Уровень

//=================================== 2 Уровень
class Employee extends User
{
    private $salary;

    function setSalary($salary) {
        if(is_integer($salary)) {
            $this->salary = $salary;
        }
        return $this;
    }
    function getSalary() {
        if(isset($this->salary)) {
            return $this->salary . "$";
         } else {
             return "Этого значения нет в выбранном объекте";
         }
    }
}

class Student extends User
{
    private $course = 0;

    function setCourse() {
        $this->course ++;
        return $this;
    }

    function getCourse() {
        if(isset($this->course)) {
            return $this->course;
         } else {
             return "Этого значения нет в выбранном объекте";
         }
    }

    function addOneYear() {
        $this->age ++;
    }
}
//=================================== /* 2 Уровень

//=================================== 3 Уровень
class Programmer extends Employee
{
    private $langs = [];

    function __construct($langs) {
        $this->setLangs($langs);
    }

    function setLangs($langs) {
        if(is_array($langs)) {
           // Добавить все элементы массива в переменной $numer в массив всех чисел
            for($i=0; $i < count($langs); $i++) {
                array_push($this->langs, $langs[$i]);
            } 
        } else {
            echo "Список языков должен передаваться в массиве";
        }
        return $this;
    }

    function getLangs() {
        if(isset($this->langs)) {
            return $this->langs;
         } else {
             return "Этого значения нет в выбранном объекте";
         }
    }
}

class Driver extends Employee
{
    private $category;
    private $experience;

    function __construct($category, $experience) {
        $this->setCategory($category);
        $this->setExperience($experience);
    }

    function setCategory($category) {
        //проверка. Если в условие функции передана строка
        if(is_string($category)) {
            //mb_strtoupper - преобразовать все символы в верхний регистр
            //     mb_substr - выбрать первый символ (0) из переданной строки ($category) (максимальное число выбераемых символов - 2)
            $this->category = mb_strtoupper(mb_substr($category, 0, 2));   
        } else {
            echo "Передан неподдерживаемый тип данных" . "<br />";
        }
        return $this;    
    }
    function getCategory() {
        //Если существует значение свойства
        if(isset($this->category)) {
            return $this->category;
         } else {
             return "Этого значения нет в выбранном объекте";
         }
    }

    function setExperience($experience) {
        //проверка. Если в условие функции передано число, или строка, содержащая число
        if(is_numeric($experience)) {
            $this->experience = $experience;
        } else {
            echo "Передан неподдерживаемый тип данных" . "<br />";
        }
        return $this;
    }
    function getExperience() {
        if(isset($this->experience)) {
           return $this->experience . " years"; 
        } else {
            return "Этого значения нет в выбранном объекте";
        }
        
    }
}
//=================================== /* 3 Уровень
?>