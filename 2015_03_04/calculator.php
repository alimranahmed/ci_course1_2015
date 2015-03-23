<?php

class Calculator{
	private $result;

	public function add($number1, $number2){
		$this->result = $number1 + $number2;
	}
	public function sub($number1, $number2){
		$this->result = $number1 - $number2;
	}
	public function div($number1, $number2){
		$this->result = $number1 / $number2;
	}
	public function mul($number1, $number2){
		$this->result = $number1 * $number2;
	}

	public function getResult(){
		return $this->result;
	}

}