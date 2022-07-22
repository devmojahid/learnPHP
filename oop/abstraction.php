<?php 
/*
abstraction
*/
abstract class College{
	public $name;
	function __construct($name){
		$this->name = $name;
	}
	abstract function returName();

}

class OutherCOllege extends College{
	function returName(){
		echo "My college name is {$this->name}";
	}
}

$obj = new OutherCOllege("comilla city colleges");
$obj->returName();