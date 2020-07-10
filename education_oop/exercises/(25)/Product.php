<?php

class Product
{
    private $name;
    private $price;
    private $quantity;

    function __construct($name, $price, $quantity) {
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    function getName() {
        return $this->name;
    }

    function getPrice() {
        return $this->price;
    }

    function getQuantity() {
        return $this->quantity;
    }

    //Возвращает цену за выбранный товар, учитывая колличество
    function getCost() {
        $price = $this->price;
        $quantity = $this->quantity;

        return $summ = $price * $quantity;
    }
}

class Cart
{
    public $products = [];

    //========================= Действия
    //     Методы действия с продуктами в корзине
    function add($products) {
        $this->products[] = $products;
    }

                                function remove($name) {

                                    
                                }

    //======================== /Действия/

    //========================= Информации
    //    Методы возврата информации о корзине продуктов
    function getTotalQuantity() {
        return $this->pereArr("getQuantity");
    }

    function getTotalPrice() {
        return $this->pereArr('getPrice');
    }

    function getAvgPrice() {
        $quantity = $this->getTotalQuantity();
        $price = $this->getTotalPrice();
        return $price/$quantity;
    }
    //======================== /Информации/


    //======================== Вспомогательные
    //  Вспомогательные методы

    //Получить информацию о продукте из класса Products через название геттера
    private function pereArr($func) {
        $sum = 0;

        foreach($this->products as $product) {
            $sum += $product->{$func}();
        }

        return $sum;
    }


                function search($name) {
                    $search = 0;
                    // Перебираем товары циклом:
                    foreach ($this->products as $product) {
                        $search = $product->getName();
                        if($search = $name) {
                            return $product;
                        }
                    }

                    if($search == 0) {
                        echo "Ничего не найдено";
                    } else {
                        echo $search;
                    }
                }
    //======================= /Вспомогательные/
}

?>