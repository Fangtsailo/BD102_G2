<?php 
class Store {
	public $id = 0;
	public $name = "";
	public $storeLogo = "";
	public $reviews = 0; //評價
	public $follow = 0;	//追蹤
	public $address = "";
	public $openStartTime = 11;//開始營業時間
	public $openEndTime = 22;//結束營業時間
	public $phone = "";
	public $closeDay = "";
	public $closeDayArr = array();
	public $story = "";
	public $type = 0;//0:店家, 1:胖小車
	public $banner1 = "";//banner1 圖片名稱
	public $banner2 = "";//banner2 圖片名稱
	public $banner3 = "";//banner3 圖片名稱
	public $lat = "";
	public $lng = "";

	function __construct($id=0,$name="山下麵包", $storeLogo="default.png", $address="桃園市中壢區中大路300號", $openStartTime=11, $openEndTime=22, $phone="1234567890", $closeDay="1,7", $story="story", $type=0, $banner1="", $banner2="", $banner3="", $lat="", $lng="") {
		$this->id = $id;
		$this->name = $name;
		$this->storeLogo = $storeLogo;
		$this->address = $address;
		$this->openStartTime = $openStartTime;
		$this->openEndTime = $openEndTime;
		$this->phone = $phone;
		$this->closeDay = $closeDay;
		$this->story = $story;	
		$this->closeDayArr = explode(",", $closeDay);
		$this->banner1 = GLOBAL_STORE_BANNERS_PIC_PATH.$banner1;
		$this->banner2 = GLOBAL_STORE_BANNERS_PIC_PATH.$banner2;
		$this->banner3 = GLOBAL_STORE_BANNERS_PIC_PATH.$banner3;
		$this->lat = $lat;
		$this->lng = $lng;
	}
}

 ?>