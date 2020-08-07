<?php
interface iTag
{
    // Геттер имени:
    public function getName();
    
    // Геттер текста:
    public function getText();
    
    // Геттер всех атрибутов:
    public function getAttrs();
    
    // Геттер одного атрибута по имени:
    public function getAttr($name);
    
    // Открывающий тег, текст и закрывающий тег:
    public function show();
    
    // Открывающий тег:
    public function open();
    
    // Закрывающий тег:
    public function close();
    
    // Установка текста:
    public function setText($text);
    
    // Установка атрибута:
    public function setAttr($name, $value = true);
    
    // Установка атрибутов:
    public function setAttrs($attrs);
    
    // Удаление атрибута:
    public function removeAttr($name);
    
    // Установка класса:
    public function addClass($className);
    
    // Удаление класса:
    public function removeClass($className);
}

class Tag implements iTag
{
    private $name;
    private $attr = [];
    private $text;

    function __construct($name)
    {
        $this->name = $name;
    }

//===============Работа с атрибутами
    function setAttr($name, $value = true)
    {
        $this->attr[$name] = $value;
        return $this;
    }

    function setText($text) {
        $this->text = $text;
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

    function show() {
        return $this->open() . $this->text . $this->close();
    }
//===============Открыть/закрыть тег

//===============Вспомогательные функции
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

    private function removeElem($elem, $arr) {
        $key = array_search($elem, $arr);
        array_slice($arr, $key, 1);

        return $arr;
    }
//===============Вспомогательные функции

//=============== Функции-геттеры

    function getName() {
        return $this->name;
    }

    function getText() {
        return $this->text;
    }

    function getAttrs() {
        return $this->attr;
    }

    function getAttr($name) {
        if(isset($this->attr[$name])) {
           return $this->attr[$name]; 
        } else {
            return null;
        }
        
    }
//=============== Функции-геттеры

}

?>