<?php 
/*
Final Method
*/
class Parent{
	final function doSomthing(){  // You Can't Override the final method 
		echo "Do somthing";
	}
}

class Child extends Parent{
	function doNothing(){
		echo "Do Nothing";
	}
}

