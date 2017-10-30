function initShopBMap(lat, lng){
	var area = document.getElementById('myMap');
	var myPosition = new google.maps.LatLng(lat, lng);
	
	var map = new google.maps.Map(area,{
		zoom: 14,
		center: myPosition,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	}); 

	var marker = new google.maps.Marker({
		position: myPosition,
		map: map,
		icon: 'img/SHOPB/iconBOLO.png',
		title: '哪裡有好吃麵包店!'
	});
}