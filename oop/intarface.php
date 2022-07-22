<?php 
interface Worker{
	public function workerNameReturn();
	public function workerAllDetels($name,$detels);
}

class Base implements Worker{  // You can imliments worker not extends in class
	public function workerNameReturn(){
	}
	public function workerAllDetels($name,$detels){
	}
}

interface BaseInterface extends Worker{  // You can extends worker in interface to interfase

}

abstract class ChildAbstract implements Worker{ // You can implements worker in abstract 

}