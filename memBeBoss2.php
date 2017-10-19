<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<title>會員專區_首頁</title>
	<link rel="stylesheet" type="text/css" href="css/basic.css">
	<link rel="stylesheet" type="text/css" href="css/memBeBoss2.css">
    <script  type="text/javascript" src="libs/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="js/header.js"></script>
</head>
<body>
<!-- ======================================================header 頁首========================================================= -->
<?php
    require_once("header.php");
?> 


<!-- ======================================================container 內容格線========================================================= -->
    
    <div class="container">
        <!-- ===================寫法一=================== -->
        <!-- <div class="memBeBoss">
            <div class="memTitle col-xs-12 col-sm-12">
                <img src="img/memimg/bebosstl.svg" alt="成為店長">
            </div>

            <section class="memsection3">
                <div class="memFormHeader col-xs-12 col-sm-12">
                    <h1>這裡有您想新增的店嗎?</h1>
                    <a href="#" class="memaddshop"><img src="img/memimg/memaddshop.svg"></a>
                    <a href="#" class="nexttStep">是的! 下一步</a>
                </div>
            </section>
            
            <section class="memsection4">
                <div class="memFollows">
                    <div class="memFollow">
                        <div class="menFollowImg">
                            <img src="img/memimg/followimg1.jpg">
                        </div>
                        <div class="menFollowInfo">
                            <div class="left">
                                <h3 class="storeName"><a href="#">小木屋鬆餅屋</a></h3>
                                <ul class="storeReviews">
                                    <li class="star"><img src="img/icon/star2.svg"></li>
                                    <li class="star"><img src="img/icon/star2.svg"></li>
                                    <li class="star"><img src="img/icon/star2.svg"></li>
                                    <li class="star"><img src="img/icon/star2.svg"></li>
                                    <li class="star"><img src="img/icon/star2.svg"></li>
                                </ul>
                            </div>
                            <div class="btn50px follow">
                                <a href="javascript:;"><img src="img/icon/follow.svg"></a>
                            </div>
                            <div class="clearfix"></div>
                            <p class="store tel">電話：03 426 5215</p>
                            <p class="store add">地址：桃園市中壢區中大路300號</p>
                            <div class="btn50px mappointer1">
                                <a href="javascript:;"><img src="img/icon/mappointer1.svg"></a>
                            </div>
                            <div class="dateTime">
                                    收藏時間：2017-10-6
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div> -->


        <!-- ===================寫法二=================== -->
        <div class="memBeBoss">
            <div class="memTitle">
                <img src="img/memimg/bebosstl.svg" alt="成為店長">
            </div>

            <section class="memsection3">
                <div class="memFormHeader col-xs-12 col-sm-12">
                    <h1>這裡有您想新增的店嗎?</h1>
                </div>
            </section>
            
            <section class="memsection4">
                <div class="memFollows">
                    <div class="memFollow">
                        <div class="menFollowImg">
                            <img src="img/memimg/followimg1.jpg">
                        </div>
                        <div class="menFollowInfo">
                            <div class="left">
                                <div class="btn50px follow">
                                    <a href="javascript:;">
                                        <img src="img/icon/follow.svg">
                                    </a>
                                </div>
                                <h3 class="storeName">
                                    <a href="#">小木屋鬆餅屋</a>
                                </h3>
                                <ul class="storeReviews">
                                    <li class="star"><img src="img/icon/star2.svg"></li>
                                    <li class="star"><img src="img/icon/star2.svg"></li>
                                    <li class="star"><img src="img/icon/star2.svg"></li>
                                    <li class="star"><img src="img/icon/star2.svg"></li>
                                    <li class="star"><img src="img/icon/star2.svg"></li>
                                </ul>
                            </div>
                            <ul>
                                <li class="store tel">電話：03 426 5215</li>
                                <li class="store add">地址：桃園市中壢區中大路300號</li>
                            </ul>
                            <div class="btn50px mappointer1">
                                <a href="javascript:;"><img src="img/icon/mappointer1.svg"></a>
                            </div>
                            <span class="dateTime">
                                收藏時間：2017-10-6
                            </span>
                        </div>
                    </div>
                </div>

                <div class="action">
                    <a href="#" class="memaddshop"><img src="img/memimg/memaddshop.svg"></a>
                    <a href="memBeBoss3.php" class="nextStep">是的! 下一步</a>
                </div>
            </section>
        </div>

    </div>

<!-- ======================================================footer 頁尾========================================================= -->
<?php
    require_once("footer.php");
?>
    
</body>
</html>