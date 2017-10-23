<?php 
ob_start();
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<title>TREPUN</title>
	<link rel="stylesheet" type="text/css" href="libs/slick-1.8.0/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="libs/slick-1.8.0/slick/slick-theme.css">
	<link rel="stylesheet" type="text/css" href="libs/jquery.sweet-modal-1.3.3/dev/jquery.sweet-modal.css">
	<link rel="stylesheet" type="text/css" href="css/homepage.css">
	<!-- 套件區 -->
	<script type="text/javascript" src="libs/jquery/dist/jquery.min.js"></script>
	<script type="text/javascript" src="libs/gsap/src/minified/TweenMax.min.js"></script>
	<script type="text/javascript" src="libs/ScrollMagic/scrollmagic/minified/ScrollMagic.min.js"></script>
	<script type="text/javascript" src="libs/ScrollMagic/scrollmagic/minified/plugins/animation.gsap.min.js"></script>
	<script type="text/javascript" src="libs/ScrollMagic/scrollmagic/minified/plugins/debug.addIndicators.min.js"></script>
	<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vivus/0.4.2/vivus.min.js"></script> -->
	<script type="text/javascript" src="libs/vivus/vivus.min.js"></script>
	<script type="text/javascript" src="js/parallax.min.js"></script>
	<script type="text/javascript" src="libs/jquery.sweet-modal-1.3.3/min/jquery.sweet-modal.min.js"></script>
	<script type="text/javascript" src="js/header.js"></script>
	<!-- googlemap -->
	<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDZlV8XEYyGoIi9poFgwFzwc5X_rfvtXsE&callback"></script> -->


</head>
<body>
	<?php 

require_once("headerForHomePage.php");

 ?>

<!-- ======================================================內頁開始========================================================= -->	






<!-- ======================================================1st首頁搜尋========================================================= -->	
	<section class="homeSearchBar" id="section1-move">
		
		
		<div class="itemGrp">
			<div class="bigLogo">
				
				<svg id="theLogo" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 180 100" style="enable-background:new 0 0 180 100;" xml:space="preserve">
				<style type="text/css">
					.st0{fill:#fff;stroke:#fff;}
				</style>
				<g>
					<g>
						<g>
					<path class="st0" d="M20,38.3c0.6,1.8,0.4,3.5-0.5,5.1c-0.9,1.7-2.2,2.9-4,3.4h-0.1v2.9c0,1.9-0.7,3.5-2,4.9c-1.3,1.3-3,2-4.9,2
						V49L4,50.4c-0.6-1.8-0.4-3.5,0.5-5.2c0.9-1.7,2.2-2.8,4-3.3h0.1v-7H3.4c0-3.6,1.7-5.8,5.2-6.7v-0.6c0-1.8,0.7-3.5,2-4.9
						c1.3-1.3,3-2,4.9-2V28h5.1c0,3.6-1.7,5.8-5.1,6.7v5L20,38.3z M50.8,42.3c-0.1,4.4-0.7,7.7-1.6,9.9c-1.3,2.9-3.4,4.6-6.2,5.1
						c-2.2,0.4-4.3-0.1-6.1-1.3c-2.2-1.5-4-4-5.6-7.7l-2.4,1.3c-1.7,0.9-3.4,1-5.2,0.5c-1.8-0.6-3.2-1.7-4-3.3l9.2-5
						c-0.9-3.6-1.4-5.7-1.5-6.3l-6.6,1c-0.3-1.8,0.1-3.4,1.1-5c1.1-1.5,2.5-2.4,4.3-2.8l-0.4-3c-0.3-1.8,0.2-3.5,1.3-5
						c1.1-1.5,2.7-2.4,4.6-2.7l1.2,9.6l13.5-1.9c0.3,1.8-0.1,3.5-1.2,5c-1.1,1.6-2.6,2.5-4.5,2.8l-6.6,1c0-0.2,0.3,1.1,0.9,3.9
						l3.1-1.7c1.7-0.9,3.4-1,5.2-0.5c1.8,0.6,3.1,1.7,4,3.3l-10.1,5.4c1.1,2.8,2.3,4.6,3.4,5.3c1,0.6,1.7,0.2,2.2-1.3
						C44.4,44.3,47,42,50.8,42.3z M45.7,24.2c-1.6,1-3.3,1.2-5.1,0.7c-1.8-0.4-3.2-1.5-4.2-3.1l-2-3.4c1.7-1,3.4-1.2,5.1-0.8
						c1.8,0.5,3.2,1.6,4.2,3.1L45.7,24.2z"/>
					<g>
						<path class="st0" d="M97.7,34.5l-0.6,2.4h11.7v9.8c0,1.9-0.7,3.5-2,4.9c-1.4,1.3-3,2-4.9,2h-7c0-1.9,0.7-3.5,2.1-4.9
							c1.3-1.3,3-2,4.9-2v-3h-6.7l-1.6,5.9c-0.4,1.8-1.5,3.2-3.1,4.2c-1.6,1-3.3,1.2-5.1,0.8l5.2-20.1h-5.8c0-1.9,0.7-3.5,2-4.9
							c1.4-1.3,3-2,4.9-2h3.5l-1.9-4.2c1.7-0.8,3.3-0.8,5-0.2c1.7,0.6,2.9,1.7,3.6,3.3l0.4,1h9c0,1.8-0.7,3.5-2,4.9
							c-1.3,1.3-3,2-4.9,2H97.7z"/>
						<path class="st0" d="M76.9,57.6c3-3.8,4.8-8.2,5.1-13.2h-13l1.4-2.5h7c1.9,0,3.5-0.7,4.8-2c1.3-1.3,1.9-3,1.9-4.9H72.7v-2.4h3
							c1.9,0,3.5-0.7,4.9-2c1.3-1.3,1.9-3,1.9-4.9h-9.8v-2.4h3.7c1.9,0,3.5-0.7,4.9-2c1.3-1.3,1.9-3,1.9-4.9H72.7v-5.9
							c-1.7,0-3.2,0.6-4.5,1.7c-1.3,1.1-2,2.5-2.3,4.2h-3.7c-1.9,0-3.5,0.7-4.9,2c-1.3,1.3-2,3-2,4.9h10.5v2.4h-3
							c-1.9,0-3.5,0.7-4.9,2c-1.3,1.3-2,3-2,4.9h9.8V35h-4.8c-1.9,0-3.5,0.7-4.9,2c-1.3,1.3-2,3-2,4.9h8.4l-8,13.7
							c1.6,1,3.3,1.2,5.1,0.7c1.8-0.4,3.2-1.5,4.2-3.1l1.1-2h8.5c-0.4,1-1.3,2.2-2.5,3.5l-0.6-0.3c-1.7-0.8-3.5-0.9-5.2-0.2
							c-1.8,0.6-3,1.8-3.8,3.5l3.3,1.6c-1.6,0.8-4.7,1.9-9.2,3.4c0.8,1.7,2,2.8,3.7,3.4c1.7,0.6,3.5,0.6,5.2,0c2.7-1,5-2.1,7-3.5
							l9.3,3.4c1.7,0.8,16.6,3.7,18.3,3.1c1.8-0.6,5.3-4.4,6.1-6.1L76.9,57.6z M76.7,18.7c1.4-0.6,2.6-0.9,2.8-0.7
							c0.1,0.2-0.9,1-2.4,1.6c-1.4,0.6-2.6,0.9-2.8,0.7C74.2,20,75.3,19.3,76.7,18.7z M62.7,19.6c-1.4,0.6-2.6,0.9-2.8,0.7
							c-0.1-0.2,0.9-1,2.4-1.6c1.4-0.6,2.6-0.9,2.8-0.7C65.2,18.2,64.1,18.9,62.7,19.6z M67.1,20.3c-0.1-0.2,0.9-1,2.4-1.6
							c1.4-0.6,2.6-0.9,2.8-0.7c0.1,0.2-0.9,1-2.4,1.6C68.5,20.2,67.2,20.5,67.1,20.3z"/>
					</g>
					<g>
						<path class="st0" d="M108.8,75.5c-0.2,0-0.4,0.1-0.6,0.2c-1.3,0.8-2.5,3.4-3.7,7.8c-0.7,2.7-1,4.9-1,6.7c0,0.9,0,1.5,0.1,2
							c0.1,0.5,0.3,0.7,0.8,0.7c2,0,3-0.6,3-1.7l0.3-5.2c0-0.3,0.2-1.4,0.5-3.1c0.4-1.8,0.6-3.2,0.7-4.3c0.1-0.6,0.1-1.2,0.1-1.9
							C109.1,75.9,109,75.5,108.8,75.5z"/>
						<path class="st0" d="M116.7,73.4c-1.5-1.3-3.5-2-6.1-2c-1.4,0-2.7,0.3-4,0.9c-1.3,0.6-2.2,1.2-2.7,1.9c-0.6,0.7-0.9,1.3-0.9,1.6
							c0,0.2,0.2,0.3,0.5,0.3c0.3,0,0.7-0.1,1-0.3c0.4-0.2,0.8-0.4,1.3-0.7c1.3-0.7,2.6-1,4.1-1c1.5,0,2.6,0.3,3.4,1
							c0.8,0.7,1.2,1.6,1.2,2.8c0,1.9-0.4,3.3-1.3,4.1c-0.4,0.4-0.8,0.6-1.3,0.7c-0.5,0.1-0.9,0.2-1.3,0.3c-0.4,0.1-0.7,0.1-1,0.2
							c-0.3,0.1-0.4,0.2-0.4,0.5c0,0.8,0.9,1.3,2.8,1.3c1.9,0,3.4-0.7,4.7-2.2c1.2-1.4,1.9-3.1,1.9-4.9
							C118.6,76.1,118,74.6,116.7,73.4z"/>
						<path class="st0" d="M146.3,85.9c-0.1,0-0.3,0.2-0.7,0.5c-0.3,0.4-0.7,0.7-1,1.1c-0.4,0.4-0.7,0.8-1.1,1.1
							c-0.4,0.4-0.7,0.5-0.9,0.5c-0.2,0-0.3-0.1-0.3-0.4c0-0.3,0-0.7,0.2-1.1c0.1-0.4,0.3-1.2,0.5-2.2c0.2-1,0.4-2.1,0.3-3.1
							c0-1-0.3-1.9-0.9-2.3c-0.7-0.5-1.4-0.8-2.7-0.8c-1.2,0-2.2,0.5-3,1.4c-0.6-1.3-1.1-1.9-1.8-1.9c-0.4,0-0.7,0.3-1,0.8
							c-0.9,1.5-1.5,3.1-1.7,4.8c-0.1,0.5-0.1,1.2-0.2,2c-0.1,0.1-0.1,0.1-0.2,0.2c-0.3,0.4-0.7,0.7-1,1.1c-0.4,0.4-0.7,0.8-1.1,1.1
							c-0.4,0.4-0.7,0.5-0.9,0.5c-0.2,0-0.3-0.2-0.3-0.5c0-0.7,0.1-1.9,0.5-3.8c0.4-1.9,0.5-3.3,0.5-4.2c0-0.6-0.1-1.1-0.2-1.4
							c-0.1-0.3-0.4-0.5-0.8-0.5c-1.8,0-2.7,0.6-2.7,1.9c0,0,0.1,1.6,0,3.2c-0.1,1.4-0.1,2.2-0.6,3.4c-0.6,1.6-1.6,2.2-2.4,2.2
							c-0.8,0-1.2-0.3-1.2-1c0-0.8,0.1-1.8,0.4-2.8c0.3-1.1,0.5-2,0.6-2.7c0.2-0.7,0.3-1.6,0.2-2.5c-0.1-1.1-0.7-1.6-1.5-1.6
							c-0.9,0-1.5,0.2-2,0.5c-0.2,0.1-0.3,0.3-0.3,0.5c-0.2,1.2-0.9,6-1.3,7.9c-0.1,0.4-0.2,0.8-0.2,1.3c0,1.1,0.4,1.9,1.1,2.4
							c0.7,0.5,1.8,0.8,3.1,0.8c0.8,0,1.5-0.3,2-0.7c0.2-0.2,0.4-0.4,0.6-0.6c0.3-0.4,0.9-0.2,1.1,0.2c0.1,0.1,0.1,0.2,0.2,0.4
							c0.7,1.6,3.6,1.3,5.3-1.2c0.3-0.5,0.6-0.9,0.9-1.3c0,0.2,0,0.4,0,0.6c0,1,0.1,1.7,0.3,2.2c0.2,0.5,0.5,0.7,0.9,0.7
							c0.2,0,0.4,0,0.6-0.1c1.4-0.6,2.2-1.2,2.2-1.9c0-0.3-0.1-0.7-0.3-1.4c-0.4-2.2,0-3.8,1-5.6c0.6-1.1,1.3-1.7,2-1.7
							c0.7,0,1.1,0.3,1.1,1c0,0.4,0,0.8-0.1,1.2c-0.1,0.4-0.2,1-0.4,1.8c-0.2,0.8-0.3,1.8-0.2,2.8c0,2.3,0.7,3.5,2.1,3.5
							c0,0,0.1,0,0.1,0c0.5,0,2-0.3,3.8-2c1.2-1.1,1.7-2.3,1.7-3.6C146.7,86.2,146.6,85.9,146.3,85.9z"/>
						<path class="st0" d="M83.6,73.8c0.1-0.3,0.2-0.6,0.4-0.9c0.1-0.3,0.2-0.5,0.2-0.6c0-0.4-0.2-0.6-0.7-0.6l-8.6-0.1
							c-2,0-3.8,0.6-5.5,1.8c-0.6,0.5-1.1,1-1.5,1.4c-0.4,0.5-0.5,0.8-0.5,1.1c0,0.2,0.1,0.3,0.4,0.3c0.3,0,0.7-0.1,1.1-0.2
							c0.5-0.1,1.2-0.4,2.3-0.7c1.1-0.3,2.2-0.6,3.3-0.6c-0.5,1.2-1.1,2.8-1.6,4.9c-0.6,2.1-1,4.1-1.3,5.9c-0.2,1-0.3,1.8-0.4,2.6
							C71.1,89,71,89.7,71,90.4c0,0.7,0,1.3,0.1,1.8c0.1,0.5,0.3,0.7,0.8,0.7c2,0,3-0.6,3-1.7c0-2.3,0.3-5.4,0.9-9.3
							c0.2-1.5,0.5-2.9,0.7-4.2c0.2-1.3,0.3-2.3,0.4-3.2c2.7,0.1,4.5,0.2,5.2,0.2C82.9,74.8,83.3,74.5,83.6,73.8z"/>
						<path class="st0" d="M100.6,86.3c-0.2,0-0.4,0.2-0.7,0.5c-0.3,0.4-0.7,0.8-1.1,1.2c-1.2,1.1-2.5,1.7-3.9,1.7
							c-0.6,0-1.2-0.2-1.7-0.4c-0.5-0.3-0.8-0.7-0.8-1.4l0-0.7c0.7-0.3,1.4-0.6,2.1-0.9c0.7-0.3,1.4-0.6,1.9-0.9
							c0.6-0.3,1.1-0.8,1.4-1.3c0.4-0.5,0.5-1.2,0.5-1.9c0-0.8-0.3-1.4-0.8-1.9c-0.5-0.5-1.2-0.7-2.2-0.7c-0.9,0-1.8,0.2-2.6,0.7
							c-0.8,0.5-1.5,1.1-2.2,1.9C90,83,89.6,84,89.2,85.1c-0.4,1.1-0.5,2.2-0.5,3.2c0,1,0.1,1.8,0.4,2.4c0.8,1.6,2.1,2.3,4.2,2.3
							c2.6,0,4.6-0.8,6-2.3c0.6-0.6,1-1.2,1.3-1.9c0.3-0.6,0.4-1.2,0.4-1.7C100.9,86.6,100.8,86.3,100.6,86.3z M94.4,82
							c0.5,0,0.8,0.2,0.8,0.7c0,0.5-0.3,1-0.8,1.4c-0.2,0.2-0.5,0.4-0.8,0.6c-0.3,0.2-0.7,0.4-1,0.7C92.9,83.2,93.5,82,94.4,82z"/>
						<path class="st0" d="M89.8,82.9c0.4-0.6-0.1-1.7-0.1-1.7c-0.6-1.5-1.7-2.2-3.5-2.1c-1.2,0.1-2.2,0.6-2.9,1.6
							c-0.1-0.2-0.2-0.4-0.3-0.6c-0.5-0.8-0.9-1.3-1.4-1.2c-0.5,0-0.8,0.3-0.9,0.7c-1.1,3.2-1.6,4.1-1.9,7c-0.2,1.7-0.3,2.5-0.2,4.1
							c0,0.4,0.2,0.8,0.3,1.1c0.1,0.3,0.3,0.6,0.9,1c0.8,0.6,1.7,0.1,1.8-1.6c0.1-1.7,0.1-5.3,1.9-8.1c0,0,0.1-0.1,0.1-0.1
							c0,0,0.1-0.1,0.1-0.1c1.2-1.4,1.9-0.5,3.2,0.7c0.2,0.2,0.3,0.3,0.5,0.5C88.5,84.8,89.1,84,89.8,82.9z"/>
					</g>
					<g>
						<path class="st0" d="M147.6,47.2L147.6,47.2c-1.8,0-3.5-0.3-5.1-0.7c-2.4-0.6-5-1.6-7.1-3.3c-5.2-3.7-8.5-9.5-9.1-15.7
							c-0.1-0.5-0.1-0.9-0.1-1.4c0-0.1,0-0.2,0-0.2c0-0.1,0-0.2,0-0.3l0,0c0.3-6.9,6.5-12.6,13.8-12.8c5.6-0.2,10.2,3,11.9,7.6
							c1.5-0.7,3-1,4.7-1c0.7,0,1.4,0.1,2,0.2c-2-8.4-9.9-14.6-19.8-14.6c-12.6,0-23.7,9.8-23.7,22c0,11.4,16.9,34.9,21.9,41.6
							c0.7,0.9,2.4,0.6,3.1-0.7c2.4-4.1,6.9-12.1,10.9-20.5C149.7,47.4,148.5,47.3,147.6,47.2z"/>
						<path class="st0" d="M165.5,23.2c-0.9,0-1.8,0.1-2.6,0.4c-0.1,0-0.2,0.1-0.3,0.1c-2.3,2-3.2,5.1-2.8,8c0.1,1-2.5,2-2.6,0.7
							c-0.5-3.5,1-7.1,3.5-9.4c-1.2-0.7-2.5-1.1-4-1.1c-1.1,0-2.2,0.2-3.1,0.7c-0.3,0.1-0.5,0.3-0.8,0.5c-2.5,1.9-3,5.2-2.4,8.2
							c0.2,1.1-1.9,1.7-2.1,0.5c-0.5-2.8,0-5.7,1.5-8.1c-0.1,0-0.2,0-0.3,0c-2.1,0-4,0.8-5.4,2c0,0-0.1,0.1-0.1,0.1
							c-0.5,0.6-0.8,1.3-1.1,2.1c-0.3,1.1-0.4,2.2-0.3,3.3c0.1,0.4-0.3,0.9-0.7,0.9c-0.4,0.1-0.9-0.3-0.9-0.7c0,0,0-0.1,0-0.1v0
							c0-1.3,0.2-2.6,0.8-3.8c0.2-0.4,0.4-0.8,0.7-1.2c-4.4,0.4-7.6,4-8,7.7c-0.8,7.6,6.7,10.6,11.2,10.6h19.3
							c7.3-0.2,11.4-6.2,10.6-12C174.9,27.8,170.7,23.2,165.5,23.2z"/>
								</g>
							</g>
						</g>
					</g>
					</svg>
		</div>
			<h2 id="descrp" class="descrp">尋找台灣巷弄間的麵包香</h2>
			<div class="searchPart">
				<form>
				<ul class="tabs">
					<li class="tab_contents active" id="searchShops">
						店家
					</li>
					<li class="tab_contents" id="searchVans">
						胖小車
					</li>
					<li class="clearfix"></li>
				</ul>
				<div class="searchContent">
					<span class="filterTitle">篩選條件</span>
					
					
						<select  class="filter" name="searchArea" id="filterArea">
								<option value="default">地區</option>
								<option value="taipei">台北市</option>
								<option value="newTaipei">新北市</option>
								<option value="taoyuan">桃園市</option>
						</select>
					
				
					<button class="filter" id="filterTops">
						<span>熱門</span>
					</button>
					<button class="filter" id="filterstars">
						<span>評價</span>
					</button>
					<div class="searchbar">
					<input id="searchInput" type="search" name="searchStore" placeholder="尋找你附近的麵包香">
					<button id="searchSubmit" type="submit">搜尋</button>
					</div>
				</div>
				<div class="clearfix"></div>
				</form>
			</div>
			<div class="sectionBetween">
				<p>不知從何找起？<br>那就先來看看我們為您精選的熱門店家！</p>
				<img src="img/icon/scrolldown.svg" class="section2-click">
			</div>

		</div>

	</section>
	<div id="trigger1"></div>




<!-- ======================================================2nd首頁熱門店家========================================================= -->
	<section class="homeTopChart" id="section2-move">
	
		<p class="topChartDescrp">為您篩選出各地區的熱門麵包香，<br>尋找附近地區最熱門的麵包小店！</p>
		
		<div class="titleGrp">
			<img src="img/icon/bread.svg">
			<h1 class="topChartTitle">精選熱門店家</h1>
		</div>

		<div id="trigger2"></div>
		<div class="shopItemGrp">
			<div class="shopItem" data-depth="1">
				<div class="shopPic">
					<img src="img/homepage/shop1.jpg">
					<h3>巴奇手做麵包</h3>
					<div class="shopInfo">
						<ul>
							<li><img src="img/icon/mappointer1.svg"><span>新北市</span></li>
							<li><img src="img/icon/star2.svg"><span>4顆星</span></li>
							<li><img src="img/icon/follow3.svg"><span>265人追蹤</span></li>
						</ul>
					</div>
				</div>
				<div class="shopMessage">
					<div class="memPic">
						<img src="">
					</div>
					<span>Chris</span>
					<span id="messageTime">2小時前</span>
					<div class="clearfix"></div>
					<div class="message">
						<p>居然還有自製果醬，跟他們家的白土司是絕配啊！</p>
					</div>
				</div>
			</div>
			<div class="shopItem">
				<div class="shopPic">
					<img src="img/homepage/shop2.jpg">
					<h3>唔飽椿</h3>
					<div class="shopInfo">
						<ul>
							<li><img src="img/icon/mappointer1.svg"><span>台北市</span></li>
							<li><img src="img/icon/star2.svg"><span>4.5顆星</span></li>
							<li><img src="img/icon/follow3.svg"><span>900人追蹤</span></li>
						</ul>
					</div>
				</div>
				<div class="shopMessage">
					<div class="memPic">
						<img src="">
					</div>
					<span>Steven</span>
					<span id="messageTime">2小時前</span>
					<div class="clearfix"></div>
					<div class="message">
						<p>我們家小孩好喜歡你們家的麵包，一直吵著要我買一整條回去...</p>
					</div>
				</div>
			</div>
			<div class="shopItem">
				<div class="shopPic">
					<img src="img/homepage/shop3.jpg">
					<h3>田也麵包</h3>
					<div class="shopInfo">
						<ul>
							<li><img src="img/icon/mappointer1.svg"><span>台中市</span></li>
							<li><img src="img/icon/star2.svg"><span>4顆星</span></li>
							<li><img src="img/icon/follow3.svg"><span>460人追蹤</span></li>
						</ul>
					</div>
				</div>
				<div class="shopMessage">
					<div class="memPic">
						<img src="">
					</div>
					<span>Tiffany</span>
					<span id="messageTime">2小時前</span>
					<div class="clearfix"></div>
					<div class="message">
						<p>全麥麵包很好吃，但對我來說是有點貴貴啦QAQ</p>
					</div>
				</div>
			</div>
		</div>
		
	</section>


<!-- ======================================================3rd首頁胖小車地圖========================================================= -->

	<section class="homeCarMap" id="section3-move">
		<div class="carMap">
			<h1 class="mapTitle">胖小車地圖</h1>
			<div class="carList">
				
			</div>
		</div>
	</section>

<!-- ======================================================4th首頁活動體驗========================================================= -->

	<section class="homeActivity" id="section4-move">
		<div class="activityTitle">
			<img src="img/homepage/actIcon.png">
			<h1>體驗活動精選</h1>
			<p>適合全家大小一起動手製作的烘焙課程</p>
		</div>
		<div class="act-bgd"></div>
		<div class="activityItem">
				<div id="chooseActUp">
					<div class="svg">
						<svg width="50" height="50" viewBox="0 0 38 38" >
						<polygon style="fill:#fbf8f1" points="19.4,14.4 28.2,25.4 26.6,26.6 19.4,17.6 12.2,26.6 10.6,25.4 "/>
						</svg>
					</div>
				</div>
				<div class="actBannerGrp">
					<div class="actBanner">
						<div class="actDate">
							<div class="dateItem">
								<span>03</span>
								<span>Nov</span>
							</div>
						</div>
						<img src="img/homepage/acty-1.jpg">
						<div class="actContent">
							<div class="content-txt">
								<h3>法式烤布蕾</h3>
								<ul>
									<li>
										<span>店家名稱</span>
										<p>勝利早點</p>
									</li>
									<li>
										<span>活動地點</span>
										<p>台南市安平區健康路55號</p>
									</li>
									<li>
										<span>活動人數</span>
										<p><span>20</span>/20人</p>
									</li>
								</ul>
							</div>
							<a href="activity_act.php" class="globalOkBtn" >立即體驗</a>
						</div>
					</div>
					<div class="actBanner">
						<div class="actDate">
							<div class="dateItem">
								<span>03</span>
								<span>Nov</span>
							</div>
						</div>
						<img src="img/acty_pic4.png">
						<div class="actContent">
							<div class="content-txt">
								<h3>德國鄉村雜糧麵包</h3>
								<ul>
									<li>
										<span>店家名稱</span>
										<p>阿財麵包屋</p>
									</li>
									<li>
										<span>活動地點</span>
										<p>台北市信義區信義路五段一號</p>
									</li>
									<li>
										<span>活動人數</span>
										<p><span>0</span>/10人</p>
									</li>
								</ul>
							</div>
							<a href="activity_act.php" class="globalOkBtn" >活動詳情</a>
						</div>
					</div>
					<div class="actBanner">
						<div class="actDate">
							<div class="dateItem">
								<span>03</span>
								<span>Nov</span>
							</div>
						</div>
						<img src="img/homepage/acty-1.jpg">
						<div class="actContent">
							<div class="content-txt">
								<h3>牛角麵包簡單做</h3>
								<ul>
									<li>
										<span>店家名稱</span>
										<p>烘焙王麵包坊</p>
									</li>
									<li>
										<span>活動地點</span>
										<p>桃園市中壢區中央路55號</p>
									</li>
									<li>
										<span>活動人數</span>
										<p><span>15</span>/20人</p>
									</li>
								</ul>
							</div>
							<a href="activity_act.php" class="globalOkBtn" >立即體驗</a>
						</div>
					</div>
				</div>
				<div id="chooseActDown">
					<div class="svg">
						<svg width="50" height="50" viewBox="0 0 38 38">
							<polygon style="fill:#fbf8f1" points="28.2,15.5 26.6,14.2 19.4,23.2 12.2,14.2 10.6,15.5 19.4,26.4 "/>
						</svg>
					</div>
				</div>
		</div>
		<div class="clearfix"></div>
	</section>
<!-- ======================================================5th首頁新進店家========================================================= -->

<?php 
// try{
// 	require_once("php/PDO/connectPDO.php");
// 	$selectNewShopSQL = "SELECT * FROM store_imformation ORDER BY SI_ADDDATE " ;
// 	$newShops = $connectPDO->query($selectNewShopSQL);
// 	while ($newShopsRow = $newShops->fetchObject()) {
?>

	<section class="homeNewshop" id="section5-move">
		<div class="newShopTitle">
			<img src="img/homepage/titleDecor1.png">
			<h1>新進店家精選</h1>
			<img src="img/homepage/titleDecor2.png">
		</div>
		<div class="newShopGrp">
			<div class="newShops">
					<div class="newShopItem">
						<img src="img/homepage/shop1.jpg">
						<div class="shopContent">
							<h2>裕馥西點麵包店</h2>
							<p>黃師傅對於麵包的熱愛來自於愛吃麵包的夫人，早期在台灣如果能吃上一個蔥花麵包那是多麼棒的一餐呀！於是兩人攜手打造『裕馥西點麵包店』，位於景美及永和兩間在地老店。</p>
							<ul>
								<li>
									<img src="img/icon/mappointer1.svg">
									<span class="newShopPlace">新北市 永和</span>
								</li>
								<li>
									<img src="img/icon/reply.svg">
									<span class="postTime">2小時前</span>
								</li>
								<div class="clearfix"></div>
							</ul>
							<a class="exploreBtn" href="#">探索更多</a>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>   
			<div class="newShops">
					<div class="newShopItem">
						<img src="img/homepage/shop1.jpg">
						<div class="shopContent">
							<h2>裕馥西點麵包店 <?php $newShopsRow->SI_NAME ?> </h2>
							<p>黃師傅對於麵包的熱愛來自於愛吃麵包的夫人，早期在台灣如果能吃上一個蔥花麵包那是多麼棒的一餐呀！於是兩人攜手打造『裕馥西點麵包店』，位於景美及永和兩間在地老店。<?php $newShopsRow->SI_STORY ?></p>
							<ul>
								<li>
									<img src="img/icon/mappointer1.svg">
									<span class="newShopPlace">新北市 永和<?php $newShopsRow->SI_ADDR ?></span>
								</li>
								<li>
									<img src="img/icon/reply.svg">
									<span class="postTime"><?php $newShopsRow->SI_ADDDATE ?> 2小時前</span>
								</li>
								<div class="clearfix"></div>
							</ul>
							<a class="exploreBtn" href="#">探索更多</a>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>   
			<div class="newShops">
					<div class="newShopItem">
						<img src="img/homepage/shop1.jpg">
						<div class="shopContent">
							<h2>裕馥西點麵包店</h2>
							<p>黃師傅對於麵包的熱愛來自於愛吃麵包的夫人，早期在台灣如果能吃上一個蔥花麵包那是多麼棒的一餐呀！於是兩人攜手打造『裕馥西點麵包店』，位於景美及永和兩間在地老店。</p>
							<ul>
								<li>
									<img src="img/icon/mappointer1.svg">
									<span class="newShopPlace">新北市 永和</span>
								</li>
								<li>
									<img src="img/icon/reply.svg">
									<span class="postTime">2小時前</span>
								</li>
								<div class="clearfix"></div>
							</ul>
							<a class="exploreBtn" href="#">探索更多</a>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
			<div class="newShops">
					<div class="newShopItem">
						<img src="img/homepage/shop1.jpg">
						<div class="shopContent">
							<h2>裕馥西點麵包店</h2>
							<p>黃師傅對於麵包的熱愛來自於愛吃麵包的夫人，早期在台灣如果能吃上一個蔥花麵包那是多麼棒的一餐呀！於是兩人攜手打造『裕馥西點麵包店』，位於景美及永和兩間在地老店。</p>
							<ul>
								<li>
									<img src="img/icon/mappointer1.svg">
									<span class="newShopPlace">新北市 永和</span>
								</li>
								<li>
									<img src="img/icon/reply.svg">
									<span class="postTime">2小時前</span>
								</li>
								<div class="clearfix"></div>
							</ul>
							<a class="exploreBtn" href="#">探索更多</a>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
			<div class="newShops">
					<div class="newShopItem">
						<img src="img/homepage/shop1.jpg">
						<div class="shopContent">
							<h2>裕馥西點麵包店</h2>
							<p>黃師傅對於麵包的熱愛來自於愛吃麵包的夫人，早期在台灣如果能吃上一個蔥花麵包那是多麼棒的一餐呀！於是兩人攜手打造『裕馥西點麵包店』，位於景美及永和兩間在地老店。</p>
							<ul>
								<li>
									<img src="img/icon/mappointer1.svg">
									<span class="newShopPlace">新北市 永和</span>
								</li>
								<li>
									<img src="img/icon/reply.svg">
									<span class="postTime">2小時前</span>
								</li>
								<div class="clearfix"></div>
							</ul>
							<a class="exploreBtn" href="#">探索更多</a>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>   
			<div class="newShops">
					<div class="newShopItem">
						<img src="img/homepage/shop1.jpg">
						<div class="shopContent">
							<h2>裕馥西點麵包店</h2>
							<p>黃師傅對於麵包的熱愛來自於愛吃麵包的夫人，早期在台灣如果能吃上一個蔥花麵包那是多麼棒的一餐呀！於是兩人攜手打造『裕馥西點麵包店』，位於景美及永和兩間在地老店。</p>
							<ul>
								<li>
									<img src="img/icon/mappointer1.svg">
									<span class="newShopPlace">新北市 永和</span>
								</li>
								<li>
									<img src="img/icon/reply.svg">
									<span class="postTime">2小時前</span>
								</li>
								<div class="clearfix"></div>
							</ul>
							<a class="exploreBtn" href="#">探索更多</a>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
			<div class="clearfix"></div>  
		</div>
		


	</section>

<?php
	
// 	} //while
// }catch(PDOException $ex){
// 	echo "資料庫操作失敗,原因：",$ex->getMessage(),"<br>";
// 	echo "行號：",$ex->getLine(),"<br>";
// }

 ?>
<!-- ======================================================6th首頁聯絡我們========================================================= -->
	


	<section class="homeContact" id="section6-move">
		<div class="addShop">
			<p>想跟全世界分享吃到好麵包的感動？</p>
			<div class="sectionItem">
					<span>
						<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 44 44" style="enable-background:new 0 0 44 44;" xml:space="preserve"><g><g><polygon points="32.8,17.8 32.8,12 28,12 28,13.9 30.9,13.9 30.9,16.8 22,11.9 8.7,19.2 9.6,20.9 22,14 30.9,19 30.9,30.2 13.2,30.2 13.2,20 11.3,21 11.3,32.1 32.8,32.1 32.8,20 34.4,20.9 35.3,19.2 		"/><polygon points="21,17.6 21,21.8 16.8,21.8 16.8,23.7 21,23.7 21,27.8 22.9,27.8 22.9,23.7 27.2,23.7 27.2,21.8 22.9,21.8 22.9,17.6 		"/></g><g><path d="M22,2c11,0,20,9,20,20s-9,20-20,20S2,33,2,22S11,2,22,2 M22,0C9.8,0,0,9.8,0,22s9.8,22,22,22s22-9.8,22-22S34.2,0,22,0L22,0z"/></g></g>
						</svg>
					</span>
				<h3>新增店家</h3>
			</div>
			
		</div>
		<div class="contactUs">
			<p>遇到問題無法解決，或有更多建議想讓我們知道？</p>
			<div class="sectionItem">
				<span>
					<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 44 44" style="enable-background:new 0 0 44 44;" xml:space="preserve"><g><path d="M22,2c11,0,20,9,20,20s-9,20-20,20S2,33,2,22S11,2,22,2 M22,0C9.8,0,0,9.8,0,22s9.8,22,22,22s22-9.8,22-22S34.2,0,22,0L22,0z"/><path d="M22,8.4c-6.5,0-10.7,4.5-10.7,11.5v4.9c0,1.9,0.5,3.3,1.4,4.1c0.3,4.6,4.3,6.7,7.9,6.7H23l0-1.9h-2.3c-2.3,0-5.1-1-5.8-3.8c0.6,0.1,1.2,0.1,1.6,0.1h1v-8.9h-3.3v1.9h1.4V28c-1.5-0.1-2.3-0.8-2.3-3.2v-4.9c0-5.9,3.4-9.6,8.8-9.6s8.9,3.7,8.9,9.6v1.1h-4.2v8.9h1c3.3,0,5.1-1.8,5.1-5.2v-4.9C32.7,12.9,28.5,8.4,22,8.4z M28.6,28v-5h2.3v1.8C30.9,26.7,30.1,27.7,28.6,28z"/></g>
					</svg>
				</span>
				<h3>客服中心</h3>
			</div>
			
		</div>
		<div class="clearfix"></div>
	</section>

 	<?php 

require_once("footer.php");
 	 ?>

<script type="text/javascript" src="libs/slick-1.8.0/slick/slick.min.js"></script>
<script type="text/javascript" src="libs/page-scroll-effects/js/velocity.min.js"></script>
<script type="text/javascript" src="libs/page-scroll-effects/js/velocity.ui.min.js"></script>
<script type="text/javascript" src="libs/page-scroll-effects/js/modernizr.js"></script>
<script type="text/javascript" src="js/homepage.js"></script>

</body>
</html>

