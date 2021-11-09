<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/education_oop/practice/Exercises/(62,63,64,65,66,67)Tag/Tag.php';

abstract class HtmlList extends Tag
{
    private $items = [];

    function addLi(ListItem $li) {
        $this->items[] = $li;
        return $this;
    }
    function addOl(Ol $ol) {
        $this->items[] = $ol;
        return $this;
    }
    function addUl(Ul $ul) {
        $this->items[] = $ul;
        return $this;
    }

    //добавить елементы массива $items в свойство пунктов списка ($this->items[])
    function addItems($items) {
        foreach($items as $item) {
            $this->items[] .= $item;
        }
        return $this;
    }

    function show() {
        //определяем переменную результата и открываем в ней тег
        $result = $this->open();

        foreach($this->items as $li) {
            //здесь идет преобразование переменной $li в строку, поэтому задействуется магический метод __toString из экземпляра класса ListItem
            //добавляем к переменной результата с помощью конкатинации текст между открытым и (в будущем добавляется) закрытым
            $result .= $li;
        }
        //добавляем ЗАКРЫВАЮЩИЙ тег
        $result .= $this->close();
        return $result;
    }

    function __toString() {
        //возвращаем строку
        return (string) $this->show();
    }
}
        //класс для создания тегов UL
        class Ul extends HtmlList
        {
            function __construct() {
                parent::__construct('ul');
            }
        }
        //класс для создания тегов OL
        class Ol extends HtmlList
        {
            function __construct() {
                parent::__construct('ol');
            }
        }
        //класс для создания тегов li
        class ListItem extends Tag
        {
            function __construct() {
                parent::__construct('li');
            }

            function __toString() {
                return (string) $this->show();
            }
        }
?>