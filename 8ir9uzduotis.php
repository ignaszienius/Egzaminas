<?php

class Person {
	
	public $name;
	public $surname;
	public $age;
	

	public function __construct($a1,$a2,$a3) {
		$this->name = $a1;
		$this->surname = $a2;
		$this->age = $a3;
		echo $this->name . " " . $this->surname . " kuriam yra " . $this->age . "metai, yra tikras nieksas. Nedraugaukit su juo <br>";	
	}

	public function asmendDuomenys() {
		echo $this->name . " " . $this->surname . " " . $this->age;
	}
}

class Staff extends Person {
	public $staffas;
	public function asmendDuomenys() {
		echo $this->name . " " . $this->surname . " darbuotojas";
	}
}	

class Client extends Person {
	public $klientas;
	}

$persona = new Person("Ignas", "Zienius", "26");
$persona->asmendDuomenys();

echo "<br>";

$personazas = new Staff("Ignas", "Zienius", "26");
$personazas->asmendDuomenys();

?>