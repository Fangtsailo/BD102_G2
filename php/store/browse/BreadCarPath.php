<?php 
class BreadCarPath {
	public $describe = "";
	public $nowLocationLat = "24.960439";
	public $nowLocationLng =  "121.190096";
	public $locationsStr = "";
	public $locations = array();

	function __construct($describe="禮拜一路線", $nowLocationLat="24.960439", $nowLocationLng="121.190096", $locationsStr="[{lat: 24.969882, lng: 121.191587},{lat: 24.963600, lng: 121.190621},{lat: 24.967978, lng: 121.184825},{lat: 24.971531, lng: 121.178006}]") {
		$this->describe = $describe;
		$this->nowLocationLat = ($nowLocationLat=="")?0:$nowLocationLat;
		$this->nowLocationLng = ($nowLocationLng=="")?0:$nowLocationLng;
		$this->locationsStr = $locationsStr;
		$this->locations = explode(";", $locationsStr);
	}
}

 ?>