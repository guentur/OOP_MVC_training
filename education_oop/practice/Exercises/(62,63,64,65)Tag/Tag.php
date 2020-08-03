<?php

class Tag
{
    private $name;
    private $attr = [];

    function __construct($name)
    {
        $this->name = $name;
    }

//===============Работа с атрибутами
    function setAttr($name, $value)
    {
        $this->attr[$name] = $value;
        return $this;
    }
    function setAttrs($attrs)
    {
        if(is_array($attrs)) {
            foreach($attrs as $name=>$value) {
                $this->setAttr($name, $value);
            }
            return $this;
        } else {
            return "передан не поддерживаемый тип данных(передан не массив)";
        }
    }

    function removeAttr($name)
    {
        unset($this->attr[$name]);
        return $this;
    }
//===============Работа с атрибутами

//===============Работа с классами
    function addClass($className)
    {
        // Если ключа class нет в массиве $this->attr:
		if (!isset($this->attr['class'])) {
			$this->attr['class'] = $className; // запишем наш CSS класс
		} else {
            $classNames = explode(' ', $this->attr['class']);

            if(!in_array($className, $classNames)) {
                $classNames[] = $className;
                $this->attr['class'] = implode(' ', $classNames);
            }
        }
        return $this; // возвращаем $this для работы цепочки
    }

    function removeClass($className)
    {   
        $classNames = explode(' ', $this->attr['class']);
        $arrKey = array_search($className, $classNames);
        unset($classNames[$arrKey]);
        $this->attr['class'] = implode(' ', $classNames);

        return $this;
    }
//===============Работа с классами

//===============Открыть/закрыть тег
    function open()
    {
        $name = $this->name;
        $attr = $this->getAttrsStr($this->attr);
        return "<$name$attr>";
    }

    function close()
    {
        return "</$this->name>";
    }
//===============Открыть/закрыть тег

//Вспомогательные функции
    private function getAttrsStr($arrAttr)
    {
        $result = '';
        if(!empty($arrAttr)) {
            foreach($arrAttr as $name=>$value) {
                if($value === true) {
                    $result .= " $name";
                } else {
                    $result .= " $name=\"$value\""; 
                }
            }
            return $result;
        } else {
            return '';
        }
    }
//Вспомогательные функции

}

?>