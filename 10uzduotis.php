<?php

class numberList {

	public $numbers;

	public function __construct($a1) {
		$this->numbers = $a1;
		
	}
	

	public function add($number) {
		array_push($this->numbers,$number);
	}
}

//nebespejau antros funkcijos parasyt laiko neuzteko. bet tikrai mokeciau : D
	public function avarage() {
		;
	}
}



$array = new numberList([2,3,8,7]);
$array->add(99);
print_r($array);

?>