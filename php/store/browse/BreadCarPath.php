<?php 
class BreadCarPath {
	public $describe = "";
	public $nowLocation = "{lat: 24.960439, lng: 121.190096}";
	public $locationsStr = "";
	public $locations = array();

	function __construct($describe, $nowLocation, $locationsStr) {
		$this->describe = $describe;
		$this->nowLocation = $nowLocation;
		$this->locationsStr = $locationsStr;
		$this->$locations = explode(";", $locationsStr);
	}
}

 ?>