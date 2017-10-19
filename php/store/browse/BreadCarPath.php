<?php 
class BreadCarPath {
	public $describe = "";
	public $nowLocation = "{lat: 24.960439, lng: 121.190096}";
	public $locationsStr = "";
	public $locations = array();

	function __construct($describe="禮拜一路線", $nowLocation="{lat: 24.960439, lng: 121.190096}", $locationsStr="[{lat: 24.969882, lng: 121.191587},{lat: 24.963600, lng: 121.190621},{lat: 24.967978, lng: 121.184825},{lat: 24.971531, lng: 121.178006}]") {
		$this->describe = $describe;
		$this->nowLocation = $nowLocation;
		$this->locationsStr = $locationsStr;
		$this->locations = explode(";", $locationsStr);
	}
}

 ?>