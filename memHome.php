<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<title>會員專區_首頁</title>
    <link rel="stylesheet" type="text/css" href="css/basic.css">
	<link rel="stylesheet" type="text/css" href="css/basic.css">
	<link rel="stylesheet" type="text/css" href="css/memHome.css">
    <script type="text/javascript" src="js/header.js"></script>
</head>
<body>
<!-- ======================================================header 頁首========================================================= -->
<?php
    require_once("header.php");
?> 
    

<!-- ======================================================container 內容========================================================= -->
    <div class="container">
        <div class="memHome">
            <div class="memTitle">
                <img src="img/memimg/memhometl.svg" alt="歡迎進入會員專區">
            </div>

            <div class="memHomeItemGroup">
                <div class="memHomeItem">
                    <div class="hidden">
                        <span>我的追蹤</span>
                        <img src="img/memimg/memhometlmyfollow.svg" alt="我的追蹤">
                    </div>
                    <div class="bread">
                        <img src="img/memimg/memhomebread.png">
                    </div>
                </div>
                
                <div class="memHomeItem">
                    <div class="hidden">
                        <span>我的留言</span>
                        <img src="img/memimg/memhometlmycomment.svg" alt="我的留言">
                    </div>
                    <div class="bread">
                        <img src="img/memimg/memhomebread.png">
                    </div>
                </div>
                
                <div class="memHomeItem">
                    <div class="hidden">
                        <span>我的報名</span>
                        <img src="img/memimg/memhometlmyentry.svg" alt="我的報名">
                    </div>
                    <div class="bread">
                        <img src="img/memimg/memhomebread.png">
                    </div>
                </div>
                
                <div class="memHomeItem">
                    <div class="hidden">
                        <span>成為店長</span>
                        <img src="img/memimg/memhometlbeboss.svg" alt="成為店長">
                    </div>
                    <div class="bread">
                        <img src="img/memimg/memhomebread.png">
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>


<!-- ======================================================footer 頁尾========================================================= -->
<?php
    require_once("footer.php");
?>
    
</body>
</html>