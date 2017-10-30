<?php 

ob_start();

session_start();

 ?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
	<title>審核新增商家</title>
	<link rel="stylesheet" type="text/css" href="css/basic.css">
	<link rel="stylesheet" type="text/css" href="css/shopManage.css">

	
	



	<!-- =======header&sideBar======= -->
	<link rel="stylesheet" type="text/css" href="css/BackStageHeaderSidebar.css">


	<!-- =======inputChange======= -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/inputChange.js"></script>


</head>
<body>

<!-- ======================================================header 頁首========================================================= -->

<?php 

require_once("BackStageHeaderSidebar.php");

 ?>


	<!-- 	</div> -->

		<div class="tableArea">



			<form method="" action="">

			<!-- =====表格內容===== -->
			<!-- <section> -->

			<div class="search">
				<input type="text" name="" placeholder="請輸入帳號或姓名搜尋">
				<img src="img/icon/BS_search.png">
			</div>


			<div class="tableHeaderCover">
				<table class="tableHeader">
					<tr>
						<td>商家編號</td>
						<td>商家店名</td>
						<td>店長ID</td>
						<td>店長姓名</td>
						<td>審核內容</td>
						<td>審核狀態</td>
					</tr>	
				</table>
			</div>
				
				<table class="tableContent">

				<?php 

					try{
						
						require_once("php/pdo/connectPDO.php");

						//$emp_id = $_SESSION["emp_id"];

						// $sql_storeinfo = "select * from store_imformation";
						// $storeinfo = $pdo->query($sql_storeinfo);
						// $storeinfo_row = $storeinfo->fetchObject();

						// $sql_ownerinfo = "select * from member";
						// $ownerinfo = $pdo->query($sql_ownerinfo);
						// $ownerinfo_row = $ownerinfo->fetchObject();

						$sql_storelist = "select *
										from store_imformation left join member 
										on store_imformation.SI_MEMNO = member.MEM_NO
										group by store_imformation.SI_NUM
										order by SI_NUM DESC";
						$storelist = $connectPDO->query($sql_storelist);
						//$storelist_row = $storelist->fetchObject();



						while ($storelist_row = $storelist->fetchObject()) {
						


											

				 ?>

					
					<tr>
						<td><?php echo $storelist_row->SI_NUM; ?></td><!-- 商家編號 -->
						<td><?php echo $storelist_row->SI_NAME; ?></td><!-- 商家店名 -->
						<td><?php echo $storelist_row->SI_MEMNO; ?></td><!-- 店長ID -->
						<td><?php echo $storelist_row->MEM_NAME; ?></td><!-- 店長姓名 -->
						<td><a href="shopManageContent.php?SI_NUM=<?php echo $storelist_row->SI_NUM ; ?>">內容</a></td><!-- 審核內容 -->
						<td>

						<?php 

						$checkmood = $storelist_row->SI_CHECKSTAY ;

						if($checkmood===null){ echo "<font color='#3d35e2'>未審核</font>"; }
						else if($checkmood==1){ echo "通過"; }
						else if($checkmood==0){ echo "<font color='#e03838'>駁回</font>"; } ?>

						</td><!-- 審核狀態 -->
					</tr> 
				

				<?php 

				}//while
					
				echo "</table>";

				} catch (PDOException $e) {
					echo "錯誤原因 : " , $e->getMessage(),"<br>";
					echo "行號 : " , $e->getLine(),"<br>";	
				}

				 ?>

			<!-- </section> -->
			<!-- =====表格內容===== end-->


			
			
			

			</form>
			<!-- </div> -->
		</div> <!-- tableArea -->









<!-- ======================================================footer 頁尾========================================================= -->



</body>
</html>