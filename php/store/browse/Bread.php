<?php 
class Bread {
	public $name = "";
	public $pictureName = "";
	public $description = "";
	public $price = 0;

	function __construct($name="", $pictureName="", $description="", $price=0) {
		$this->name = $name;
		$this->pictureName = GLOBAL_PRODUCTS_PIC_PATH.$pictureName;
		$this->description = $description;
		$this->price = $price;
	}
}

 ?>