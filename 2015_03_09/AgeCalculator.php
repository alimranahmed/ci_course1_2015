<?php
class AgeCalculator{
	private $birthday;
	private $yearAge;
	private $monthAge;

	public function __construct($birthday){
		$this->birthday = $birthday;
	}

	public function setBirthday($birthday){
		$this->birthday = $birthday;
	}
	public function getBirthday(){
		return $this->birthday;
	}
	public function getYearAge(){
		return $this->yearAge;
	}
	public function getMonthAge(){
		return $this->monthAge;
	}
	public function calculateAge(){
		$birthYear = date("Y", strtotime($this->birthday));
		$birthMonth = date("m", strtotime($this->birthday));
		$currentYear = date("Y");
		$currentMonth = date("m");
		
		if($birthMonth <= $currentMonth){
			$this->yearAge = $currentYear - $birthYear;
			$this->monthAge = $currentMonth - $birthMonth;
		}elseif($birthMonth > $currentMonth){
			$this->yearAge = $currentYear - $birthYear - 1;
			$this->monthAge = (12 - $birthMonth) + $currentMonth;
		}
		return "Year: ".$this->yearAge." Month: ".$this->monthAge;
	}
}