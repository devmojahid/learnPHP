<?php 
/*
Inheritance
*/
class Collage{
	protected $clgName;
	function __construct($clgName){
		$this->clgName = $clgName;
	}

	public function collage(){
		echo "My College Name: {$this->clgName}";
	}

	public function fvrt()
	{
		
	}
}


class Student extends Collage{
	public function aboutMe()
	{
		echo "My name is Mojahid My college Name Is {$this->clgName}";
	}

	function fvrt(){
		echo "My fvrt Item is mango";
	}
}

class Teacher extends Collage{
	public function aboutTeacher()
	{
		echo "My name is Teacher My college Name Is {$this->clgName}";
	}
}

$std1=new Student('comilla city college');
$std1->aboutMe();
$std1->fvrt();








