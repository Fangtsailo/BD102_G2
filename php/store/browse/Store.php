<?php 
class Store {
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

	function __construct($name="山下麵包", $storeLogo="default.png", $reviews=3, $follow=123, $address="桃園市中壢區中大路300號", $openStartTime=11, $openEndTime=22, $phone="1234567890", $closeDay="1,7", $story="story", $type=0) {
		$this->name = $name;
		$this->storeLogo = $storeLogo;
		$this->reviews = $reviews;
		$this->follow = $follow;
		$this->address = $address;
		$this->openStartTime = $openStartTime;
		$this->openEndTime = $openEndTime;
		$this->phone = $phone;
		$this->closeDay = $closeDay;
		$this->story = $story;	
		$this->closeDayArr = explode(",", $closeDay);	
	}
}

 ?>