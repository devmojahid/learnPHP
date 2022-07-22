<?php 

class School{
	public $name = "";
	static $studentAmount;

	function __construct($name){
		$this->name=$name;
	}
	public function yourSchool(){
		echo "School Name Is: {$this->name}";
	}

	static function schoolTeacher($amountOfTeacher){
		echo "Our Teacher Amount {$amountOfTeacher}";
		self::schoolStoudent();
	}

	static function schoolStoudent(){
		echo "Our Teacher Amount " . self::$studentAmount;
	}

	public function amni(){
		echo "emni";
	}

}

$scObj= new School('baisherkot');
$scObj->yourSchool();

School::schoolTeacher(20);
School::$studentAmount = 30;
School::schoolStoudent();

echo "\n\n\n";



/* ========================================================== */

class Base{
	static function sayHi(){
		echo "say Hi From Base";
	}
}

class Child extends Base{
	static function sayHi(){
		echo "hello From Child \n";
		parent::sayHi();
	}
}



Child::sayHi();