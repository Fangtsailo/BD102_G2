<?php 
class Bread {
	public $name = "";
	public $pictureName = "";
	public $description = "";
	public $price = 0;
	public $num = 0;

	function __construct($num=0, $name="", $pictureName="", $description="", $price=0) {
		$this->name = $name;
		$this->pictureName = GLOBAL_PRODUCTS_PIC_PATH.($pictureName==""?"default.png":$pictureName);
		$this->description = $description;
		$this->price = $price;
		$this->num = $num;
	}
}

 ?>