
<?php 

/*
RGB TO DASIMAL
*/
class RGB{
	private $color;
	private $red;
	private $green;
	private $blue;

	function __construct($color){
		$this->color=ltrim($color,'#');
	}

	function getColor(){
		return $this->color;
	}
	function setColor($color){
		$this->color = ltrim($color,'#');
		rgbParse();
	}

	private function rgbParse(){
		if($this->color){
			list($this->red,$this->green,$this->blue) = sscanf($this->color,'%02x%02x%02x');
		}else{
			list($this->red,$this->green,$this->blue) = array(0,0,0);
		}
	}

	public function colorReturn(){
		echo "Red Is {$this->red} \n Green Is {$this->green} \n Blue Is {$this->blue} \n";
	}

	

	public function getRed(){
		echo $this->red;
	}


	public function getGreen(){
		echo $this->green;
	}

	public function getBlue(){
		echo $this->Blue;
	}
}

$obj= new RGB('#ff2eac');
$obj->getRed();