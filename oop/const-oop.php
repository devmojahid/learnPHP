<?php 

/*
You can't access constant out of class in normaly .whay not constant is static proparty 
and also you can't write define in oop you try const
*/

define("OK",1);
echo OK;
const dip = 1;
echo dip;

class Base{
	// define("TRIP",343);  Ou can't write define in ooop you try const

	const TRIP = 343;

	function demo(){
		echo self::TRIP; // you can't access const by $this-> why not this is static for this cuse you use self::
	}
}

$obj = new Base();

$obj->demo();