
function initBreadCarNowLocationMap(selector) {
	globalMap = new google.maps.Map(document.getElementById(selector), {
	  zoom: 16,
	  center: {lat: 24.965356, lng: 121.191038}
	});
	var image =src='img/map_pointcar.png';
		
	;
	beachMarker = new google.maps.Marker({
	  position: {lat:  24.965356 , lng: 121.191038},
	  map: globalMap, 
	  icon: image
	});
	infoWindow = new google.maps.InfoWindow();
}

//按某台車改變 map 內容
function changeMapStatus(lat, lng, defaultContent) {
	if ((lat != '' && lng != '') && (lat != 0 && lng != 0)) {
		//JSON.parse('{"a":123}')
		var latLng = JSON.parse('{"lat":'+ lat +', "lng":'+ lng +'}');
		infoWindow.close();
		globalMap.setCenter(latLng);
		beachMarker.setPosition(latLng);
		beachMarker.setVisible(true);
	} else {
		globalMap.setCenter({lat: 24.965356, lng: 121.191038});
				//前端顯示沒營業
		infoWindow.setContent(defaultContent);
        infoWindow.setPosition({lat: 24.967993, lng: 121.191168});
        infoWindow.open(globalMap);
        beachMarker.setVisible(false);
	}
}



