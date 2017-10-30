

    //抓 user 位置
    //點擊回傳座標
    var globalCount1 = 1;
    var labels1 = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    var labelIndex1 = 0;
    var markers1 = [];

    //2.<OK>按下紐發送目前位置
        initMap1();
// function showPosition(position){
//   alert("Latitude: " + position.coords.latitude + 
//     "<br>Longitude: " + position.coords.longitude);
// }


    function initMap1() {
        map1 = new google.maps.Map(document.getElementById('map1'), {
          center: {lat: 24.967779, lng: 121.192124},
          zoom: 16
        });
        //先輸入地址把地圖 center 移入
        //<OK>按下點放一個 marker
      //<OK>抓位置到label (對應A B C)
      <?php  
      if(isset($BCP_LOCATION[0])){
      ?>
      
      
      var markers1_init=<?php echo '['.$LOCATION_1.']'; ?>;

      for (var i =0; i < markers1_init.length; i++) {
          new google.maps.Marker({
        position: markers1_init[i],
        map: map1,
        label: labels1[labelIndex1++ % labels1.length]
      });
    }

    <?php 

    }
     ?>
      
        google.maps.event.addListener(map1, 'click', function( overlay) {


          //   for (var i = 0; i < markers1_init.length; i++) {
           //      markers1_init[i].setMap(null);
           //      //$('.item1:nth-child('+(i+2)+') td').text('');
           // }
              
              if (globalCount1 <= 3) {
                var point1 = overlay.latLng.toJSON();



                var beachMarker1 = new google.maps.Marker({
                    position:point1,
                    map: map1,
                    label: labels1[labelIndex1++ % labels1.length]
                });

                markers1.push(beachMarker1);


                $('.item1:nth-child('+(globalCount1+1)+') td').text('{lat:'+overlay.latLng.lat().toFixed(6) +',lng:'+overlay.latLng.lng().toFixed(6) +'}');
                globalCount1++;
              }//if (globalCount <= 3)
        });//google.maps.event.addListener(map, 'click', function( overlay) {




        //反悔就按全部清除鍵
        $('#clear1').on('click', function(){
      
          for (var i = 0; i < markers1.length; i++) {
                markers1[i].setMap(null);
                $('.item1:nth-child('+(i+2)+') td').text('');
           }

        //   for (var i = 0; i < markers1_init.length; i++) {
           //      markers1_init[i].setMap(null);
           //      //$('.item1:nth-child('+(i+2)+') td').text('');
           // }
           markers1 = [];//array 要清空
           globalCount1 = 1;
         labelIndex1 = 0;
        });
                
        }//function initMap1()
  






    //抓 user 位置
    //點擊回傳座標
    var globalCount2 = 1;
    var labels2 = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    var labelIndex2 = 0;
    var markers2 = [];
    //2.<OK>按下紐發送目前位置
        initMap2();
// function showPosition(position){
//   alert("Latitude: " + position.coords.latitude + 
//     "<br>Longitude: " + position.coords.longitude);
// }


    function initMap2() {
        map2 = new google.maps.Map(document.getElementById('map2'), {
          center: {lat: 24.967779, lng: 121.192124},
          zoom: 16
        });
        //先輸入地址把地圖 center 移入
        //<OK>按下點放一個 marker
      //<OK>抓位置到label (對應A B C)
      
        google.maps.event.addListener(map2, 'click', function( overlay) {
              
              if (globalCount2 <= 3) {
                var point2 = overlay.latLng.toJSON();

                var beachMarker2 = new google.maps.Marker({
                    position: point2,
                    map: map2,
                    label: labels2[labelIndex2++ % labels2.length]
                });

                markers2.push(beachMarker2);


                $('.item2:nth-child('+(globalCount2+1)+') td').text('{lat:'+overlay.latLng.lat().toFixed(6) +',lng:'+overlay.latLng.lng().toFixed(6) +'}');
                globalCount2++;
              }//if (globalCount <= 3)
        });//google.maps.event.addListener(map, 'click', function( overlay) {




        //反悔就按全部清除鍵
        $('#clear2').on('click', function(){
      
          for (var i = 0; i < markers2.length; i++) {
                markers2[i].setMap(null);
                $('.item2:nth-child('+(i+2)+') td').text('');
           }
           markers2 = [];//array 要清空
           globalCount2 = 1;
         labelIndex2 = 0;
        });
                
        }
   




    //抓 user 位置
    //點擊回傳座標
    var globalCount3 = 1;
    var labels3 = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    var labelIndex3 = 0;
    var markers3 = [];
    //2.<OK>按下紐發送目前位置
        initMap3();
// function showPosition(position){
//   alert("Latitude: " + position.coords.latitude + 
//     "<br>Longitude: " + position.coords.longitude);
// }


    function initMap3() {
        map3 = new google.maps.Map(document.getElementById('map3'), {
          center: {lat: 24.967779, lng: 121.192124},
          zoom: 16
        });
        //先輸入地址把地圖 center 移入
        //<OK>按下點放一個 marker
      //<OK>抓位置到label (對應A B C)
      
        google.maps.event.addListener(map3, 'click', function( overlay) {
              
              if (globalCount3 <= 3) {
                var point3 = overlay.latLng.toJSON();

                var beachMarker3 = new google.maps.Marker({
                    position: point3,
                    map: map3,
                    label: labels3[labelIndex3++ % labels3.length]
                });

                markers3.push(beachMarker3);


                $('.item3:nth-child('+(globalCount3+1)+') td').text('{lat:'+overlay.latLng.lat().toFixed(6) +',lng:'+overlay.latLng.lng().toFixed(6) +'}');
                globalCount3++;
              }//if (globalCount <= 3)
        });//google.maps.event.addListener(map, 'click', function( overlay) {




        //反悔就按全部清除鍵
        $('#clear3').on('click', function(){
      
          for (var i = 0; i < markers3.length; i++) {
                markers3[i].setMap(null);
                $('.item3:nth-child('+(i+2)+') td').text('');
           }
           markers3 = [];//array 要清空
           globalCount3 = 1;
         labelIndex3 = 0;
        });
                
        }







