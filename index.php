<?php

	class ShopProduct {

		public $title = "Стандартный товар"; // свойство класса
		public $producerMainName = "Фамилия автора";
		public $producerFirstName = "Имя автора";
		public $price = 0;

	}


	$product1 = new ShopProduct();
	$product2 = new ShopProduct();
	echo $product1 -> title; // вывести свойство обьекта $product1

	$product1 -> title = "Новое значение свойства\n"; 
	echo $product1 -> title;

	$product1 -> Addition = "Дополнительный параметр\n"; // параметр Addition добавлен динамически (вне класса)
	echo $product1 -> Addition . "<br>";



	/*Определение нескольких свойств для нескольких обьектов часто становится неприятной задачей*/

	$product1 = new ShopProduct();

	$product1 -> title = "Воспитание культуриста";
	$product1 -> producerMainName = "Шварценеггер";
	$product1 -> producerFirstName = "Арнольд";
	$product1 -> price = 5.99;
	// Здесь (в отличии от обьявления в классе) для свойств (напр. title) не задается значение переменной $

	print "Автор: {$product1 -> producerFirstName} " . "{$product1 -> producerMainName}\n";


?>