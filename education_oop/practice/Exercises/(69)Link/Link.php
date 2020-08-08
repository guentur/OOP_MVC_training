<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/education_oop/practice/Exercises/(62,63,64,65,66,67)Tag/Tag.php';

class Link extends Tag
{
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

    private function activateSelf()
    {
        if ($this->getAttr('href') == $_SERVER['REQUEST_URI']) {
            $this->addClass(self::ACTIVE);
        }
    }
}