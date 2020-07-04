<?php
/*============================ ИНТЕРФЕЙСЫ =================*/
// interface Oilable {
// 	const name = 4;

// 	public function changeOil();
// }

// interface Doors {
// 	public function fourDoors();
// 	public function twoDoors();
// }

// //implements - "инвентарь" класса состоит из двух интерфейсов.
// //extends - созданный класс "продолжается" абстрактными классами. 
// class ClassMy implements Oilable, Doors {
// 	public $counterOil = 2;

// 	public function changeOil() {

// 		if ($this->counterOil / 2 == intdiv($this->counterOil, 2)) {
// 			echo "Осталось " . $this->counterOil . " литра масла";
// 		} else {
// 			echo "Осталось " . $this->counterOil . " литров масла";
// 		}
// 	}

// 	public function fourDoors() {
// 		echo "Машина имеет 4 двери";
// 	}
// 	public function twoDoors() {
// 		echo "Машина имеет 2 двери";
// 	}

// 	function changeFuil() {
// 		echo "Интерфейс может имет приватную функцию";
// 	}

// }

// $obj = new ClassMy;
// $obj->changeOil();


/*============================ АБСТРАКТНЫЕ КЛАССЫ=================*/
// abstract class Oilable {
// 	public $name = 4;

// 	abstract function changeOil();
// 	// abstract private function changeFuil();
// 	abstract protected function changeFuil();
// }

// interface Doors {
// 	public function fourDoors();
// 	public function twoDoors();
// }

// //implements - "инвентарь" класса состоит из двух интерфейсов.
// //extends - созданный класс "продолжается" абстрактными классами. 
// class ClassMy extends Oilable {
// 	public $counterOil = 2;

// 	function changeOil() {

// 		if ($this->counterOil / 2 == intdiv($this->counterOil, 2)) {
// 			echo "Осталось " . $this->counterOil . " литра масла";
// 		} else {
// 			echo "Осталось " . $this->counterOil . " литров масла";
// 		}
// 	}

// 	// public function fourDoors() {
// 	// 	echo "Машина имеет 4 двери";
// 	// }
// 	// public function twoDoors() {
// 	// 	echo "Машина имеет 2 двери";
// 	// }

// 	function changeFuil() {
// 		echo "Интерфейс может имет приватную функцию";
// 	}
// }

// $obj = new ClassMy;
// $obj->changeOil();