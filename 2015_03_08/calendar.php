<?php
class Calendar{
	private $day;
	private $month;
	private $year;
	public function __construct($dayString = "today"){
		if(strtolower($dayString) == "today"){
			$this->day = date("d");
			$this->month = date('m');
			$this->year = date("Y");
		}
		if(strtolower($dayString) == "tomorrow"){
			$this->day = date("d")+1;
			$this->month = date('m');
			$this->year = date("Y");
		}
		if(strtolower($dayString) == "yesterday"){
			$this->day = date("d")-1;
			$this->month = date('m');
			$this->year = date("Y");
		}
	}
	public function getDate($format = "d M, Y"){
		$currentDate = $this->month."/".$this->day."/".$this->year;
		return date($format, strtotime($currentDate));
	}
	public function setDay($day){
		if(strtolower($day) == "today"){
			$this->day = date("d");
		}
		if(strtolower($day) == "tomorrow"){
			$this->day = date("d")+1;
		}
		if(strtolower($day) == "yesterday"){
			$this->day = date("d")-1;
		}
	}
}