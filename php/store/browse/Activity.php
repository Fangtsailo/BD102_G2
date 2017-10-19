<?php 
class Activity {
	public $title = "";
	public $address = "";
	public $time = "";
	public $peopleLimit = 0;
	public $ingredient = "";//材料
	public $price = "";
	public $bannerPicName = "";

	function __construct($title="牛角麵包簡單學", $address="桃園市中壢區中央路55號 烘焙王麵包坊", $time="106/12/10 下午1:00(預計3小時)", $peopleLimit = 100, $ingredient = "麵包坊提供", $price="報名費與材料一共1000元(現場收費)",$bannerPicName="") {
		$this->title = $title;
		$this->address = $address;
		$this->time = $time;
		$this->peopleLimit = $peopleLimit;
		$this->ingredient = $ingredient;
		$this->price = $price;
		$this->bannerPicName = GLOBAL_ACTIVITY_PIC_PATH.$bannerPicName;
	}
}

 ?>