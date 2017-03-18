<?php

	    class ShopProduct {

        public $title = "Стандартный товар"; // свойство класса
        public $producerMainName = "Фамилия автора";
        public $producerFirstName = "Имя автора";
        public $price = 0;

        /*add method*/

            function getProducer () {

                return "{$this -> ProducerFirstName}"
                        ."{$this -> ProducerMainName}"

            }

    }


    $product1 = new ShopProduct();

    // Определить значения метода (не переопределить значение свойства ! команда echo говорит вывести метод $product1 -> getProducer(), а не свойство):

    $product1 -> ProducerFirstName = "Шварценеггер\n";
    $product1 -> ProducerMainName = "Арнольд";

    echo "Автор: {$product1 -> getProducer()}";

// => Автор: Шварценеггер Арнольд


?>