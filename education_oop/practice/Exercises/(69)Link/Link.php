<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/education_oop/practice/Exercises/(62,63,64,65,66,67)Tag/Tag.php';

class Link extends Tag
{
    //Константа класса active
    const ACTIVE = 'active';

    public function __construct()
    {
        $this->setAttr('href', '');
        parent::__construct('a');
    }

    // Переопределяем метод родителя:
    public function open()
    {
        $this->activateSelf(); // вызываем активацию
        return parent::open(); // вызываем метод родителя
    }

    //Метод для присвоения класса 'active' ссылке
    private function activateSelf()
    {
        //если значение атрибута 'href' ссылки равно URI-адресу страницы, где пользователь находится
        if ($this->getAttr('href') == $_SERVER['REQUEST_URI']) {
            //Добавить ссылке касс "active"
            $this->addClass(self::ACTIVE);
        }
    }
}

?>

<style>
    .active {
        background: rgba(72, 161, 72, 0.671);
    }
</style>