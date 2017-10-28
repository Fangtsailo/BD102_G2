<?php 
class ActivityObj {
	public $title = "";
	public $address = "";
	public $time = "";
	public $peopleLimit = 0;
	public $ingredient = "";//材料
	public $price = "";
	public $bannerPicName = "";
	public $bannerfullPicName = "";
	public $num = 0;
	public $actPicName1 = "";//活動照片
	public $actPicName2 = "";
	public $actPicName3 = "";
	public $actProductPicName1 = "";//成品照片
	public $actProductPicName2 = "";
	public $actProductPicName3 = "";


	function __construct($num=0,$title="敬請期待體驗活動...", $address="", $time="", $peopleLimit = 0, $ingredient = "", $price="",$bannerPicName="",$actPicName1 = "",$actPicName2 = "",$actPicName3 = "",$actProductPicName1 = "",$actProductPicName2 = "",$actProductPicName3 = "") {
		$this->num = $num;
		$this->title = $title;
		$this->address = $address;
		$this->time = $time;
		$this->peopleLimit = $peopleLimit;
		$this->ingredient = $ingredient;
		$this->price = $price;
		$this->bannerPicName = $bannerPicName;
		$this->bannerfullPicName = GLOBAL_ACTIVITY_PIC_PATH.($bannerPicName==""?"default.jpg":$bannerPicName);
		$this->actPicName1 = GLOBAL_ACTIVITY_ACT_PIC_PATH.($actPicName1==""?"default.jpg":$actPicName1);
		$this->actPicName2 = GLOBAL_ACTIVITY_ACT_PIC_PATH.($actPicName2==""?"default.jpg":$actPicName2);
		$this->actPicName3 = GLOBAL_ACTIVITY_ACT_PIC_PATH.($actPicName3==""?"default.jpg":$actPicName3);
		$this->actProductPicName1 = GLOBAL_ACTIVITY_PRODUCT_PIC_PATH.($actProductPicName1==""?"default.jpg":$actProductPicName1);
		$this->actProductPicName2 = GLOBAL_ACTIVITY_PRODUCT_PIC_PATH.($actProductPicName2==""?"default.jpg":$actProductPicName2);
		$this->actProductPicName3 = GLOBAL_ACTIVITY_PRODUCT_PIC_PATH.($actProductPicName3==""?"default.jpg":$actProductPicName3);
	}
}

 ?>