<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<title>會員專區_成為店長</title>
	<link rel="stylesheet" type="text/css" href="css/basic.css">
    <link rel="stylesheet" type="text/css" href="css/grid.css">
	<link rel="stylesheet" type="text/css" href="css/memBeBoss3.css">
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
        <div class="memBeBoss">
            <div class="memTitle col-xs-12 col-sm-12">
                <img src="img/memimg/bebosstl.svg" alt="成為店長">
            </div>

            <section class="memsection5">
                <form action="" method="post">
                    <div class="memFormHeader col-xs-12 col-sm-12">
                        <h1>繼續完成店長資料登錄</h1>
                        <p>完成後請按送出，<br>我們將與您進行審核作業！</p>
                    </div>
                    <div class="memFormContent col-xs-12 col-sm-12">
                        <div class="memFormInput">
                            <label><span>*</span>店長姓名</label>
                            <input type="text" name="MEM_NAME" maxlength="4" placeholder="請輸入真實姓名">
                        </div>
                        <div class="memFormInput">
                            <label><span>*</span>身分證號</label>
                            <input type="text" name="BOSS_ID???" maxlength="10" placeholder="輸入格式:A000000000">
                        </div>
                        <div class="memFormInput">
                            <label><span>*</span>聯絡電話</label>
                            <input type="tel" name="MEM_PHONE" maxlength="10" placeholder="輸入格式:034257387">
                        </div>
                        <div class="memFormInput">
                            <label><span>*</span>統一編號</label>
                            <input type="text" name="TAX_ID???" maxlength="8" placeholder="輸入格式:80088888">
                        </div>
                        <div class="memFormInput">
                            <label onclick="location.href='FMybusinessStore.php'"><span>*</span>車牌號碼</label>
                            <input type="text" name="VAN_ID???" maxlength="7" placeholder="輸入格式:KAQ-230">
                        </div>
                        
                        <!-- <div class="memFormBtns"> -->
                            <button  onclick="location.href='FMybusinessStore.php'">送出</button>
                        <!-- </div> -->

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