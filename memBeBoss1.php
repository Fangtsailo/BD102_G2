<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<title>會員專區_成為店長</title>
	<link rel="stylesheet" type="text/css" href="css/basic.css">
    <link rel="stylesheet" type="text/css" href="css/grid.css">
	<link rel="stylesheet" type="text/css" href="css/memBeBoss1.css">
    <script type="text/javascript" src="js/header.js"></script>
</head>
<body>
<!-- ======================================================header 頁首========================================================= -->
<?php
    require_once("header.php");
?> 



<!-- ======================================================container 內容格線========================================================= -->
    <div class="container">
        <div class="memBeBoss">
            <div class="memTitle col-xs-12 col-sm-12">
                <img src="img/memimg/bebosstl.svg" alt="成為店長">
            </div>

            <section class="memsection1">
                <div class="memfigure col-xs-12 col-sm-3">
                    <figure>
                        <img src="img/memimg/memBk01.png" alt="免費申請">
                    </figure>
                    <figcaption>
                        <h3>免費24小時數位服務</h3>
                        <p>讓數位服務24小時幫你吸引人潮、增加營收、好感度！</p>
                    </figcaption>
                </div>
                <div class="memfigure col-xs-12 col-sm-3">
                    <figure>
                        <img src="img/memimg/memBk02.png" alt="免費申請">
                    </figure>
                    <figcaption>
                        <h3>讓您的店更有吸引力</h3>
                        <p>您可以輕鬆上傳店頭照片和美食照片，吸引網友上門。</p>
                    </figcaption>
                </div>
                <div class="memfigure col-xs-12 col-sm-3">
                    <figure>
                        <img src="img/memimg/memBk03.png" alt="免費申請">
                    </figure>
                    <figcaption>
                        <h3>容易在Google找到</h3>
                        <p>我們是Google合作夥伴，您的店會在Google map出現!</p>
                    </figcaption>
                </div>
                <div class="memfigure col-xs-12 col-sm-3">
                <figure>
                    <img src="img/memimg/memBk04.png" alt="免費申請">
                </figure>
                <figcaption>
                    <h3>讓更多人知道您的店</h3>
                    <p>隨時更新店家簡介及位置資訊，讓網友即時接獲新訊。</p>
                </figcaption>
                </div>
            </section>

            <section class="memsection2">
                <form action="" method="post">
                    <div class="memFormHeader col-xs-12 col-sm-12">
                        <h1>想和我們合作嗎？</h1>
                        <p>請填寫以下表單，<br>我們將有專人盡快與你聯繫！</p>
                    </div>
                    <div class="memFormContent col-xs-12 col-sm-12">
                        <div class="memFormInput">
                           <label><span>*</span>選擇店型</label>
                           <input type="radio" name="store" value="1" class="radio">麵包店
                           <input type="radio" name="store" value="0" class="radio">麵包車
                        </div>

                        <div class="memFormInput">
                            <label><span>*</span>輸入店名</label>
                            <input type="text" name="店名" placeholder="請輸入完整店名">
                        </div>

                        <a href="memBeBoss2.php" class="nextStep">下一步</a>
                    </div>
                </form>
            </section>
        </div>
    </div>

<!-- ======================================================footer 頁尾========================================================= -->
<?php
    require_once("footer.php");
?>
    
</body>
</html>