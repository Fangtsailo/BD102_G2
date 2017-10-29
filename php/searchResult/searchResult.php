<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
	
<?php 
		
		$filter='';
		$shopPosition='';
		$searchName='';
	
		if (isset($_REQUEST["filter"])){
			
			$filter=$_REQUEST["filter"]; 
		}

		if (isset($_REQUEST["shopPosition"])) {
			
			$shopPosition=$_REQUEST["shopPosition"];
		} 

		if(isset($_REQUEST["searchName"])) {
			
			$searchName=$_REQUEST['searchName'];
		}


try{
	require_once("../pdo/connectPDO.php");

		$shopType=0;  //店家 0  胖小車1
		$filter="top";

		$searchsql="select s.SI_NAME,s.SI_TYPE,s.SI_POSITION,s.SI_ADDR,s.SI_RESTDAY,s.SI_BIMG_1,s.SI_PHONE,ROUND(AVG(r.REVIEWS),1) star,COUNT(f.MEM_NO) top from store_imformation s JOIN follow f ON f.SI_NUM=s.SI_NUM JOIN reviews r ON r.SI_NUM = s.SI_NUM where  SI_TYPE='$shopType' ";	
			if ($shopPosition!=='') {
				$searchsql.=" and SI_POSITION = '$shopPosition'";
			}
			if ($searchName!==''  ) {
				$searchsql.=" and SI_NAME like '%$searchName%'";
			}
			
			$searchsql.= " group by s.SI_NUM";
			
			if ($filter!=='' && $filter=="top"){
				$searchsql.=" order by top desc"; 
			}
			if ($filter!=='' && $filter=="star"){
				$searchsql.=" order by star desc"; 
			}



			$search=$connectPDO->query($searchsql);
		

			while($searchRow=$search->fetchObject()){	
			echo "$searchRow->SI_NAME <br>";
			echo "$searchRow->SI_TYPE <br>";
			echo "$searchRow->SI_ADDR <br>";
			echo "$searchRow->SI_RESTDAY <br>";
			echo "$searchRow->SI_POSITION<br>";
			echo "$searchRow->top<br>";
			echo "$searchRow->star<br>";




		}


			// if ($shopType==0){
			// 			header("Location:../../search.php");
			// 			}else{
			// 			header("Location:../../search_car.php");
			// 			}  //跳轉哪一頁
















		// if (isset($_REQUEST["searchName"])) {
		// 	$searchName=$_REQUEST['searchName'];
		// 	$searchsql="select * from store_imformation where SI_NAME like '%:storeName%' and SI_TYPE=':shopType'";
		// 	$search=$connectPDO->prepare($searchsql);
		// 	$search->bindValue(":storeName",$searchName);
		// 	$search->bindValue(":shopType",$shopType);
		// 	$search->execute();
		// 		if($search->rowCount()==0){
		// 			echo "找不到相符店家";
		// 		}
		// 		else{
		// 				$searchRow=$search->feachObject();
		// 				if ($searchRow->SI_TYPE==0){
		// 				header("Location:../../search.php");
		// 				}else{
		// 				header("Location:../../search_car.php");
		// 				}  //跳轉哪一頁
				
		// 		}
				
			
			
		// }  // if 有搜尋關鍵字  會找到是商家還是胖小車





		// if (isset($_REQUEST["shopPosition"])) {
		// 	$shopPosition=$_REQUEST["shopPosition"]; 
			
		// 	$searchsql="select * from store_imformation where SI_POSITION='$shopPosition'";
		// 	$search=$connectPDO->query($searchsql);
			

		// 	$shopType=$_REQUEST["shopType"];
			
		// 	if ($shopType==0) {
		// 		header("Location:../../search.php");
		// 	}else{
		// 		header("Location:../../search_car.php");
		// 	}
				

		// }  //if 地區分類 直接跳店家搜索  (地區+店家)
		


		// if (isset($_REQUEST["filter"])) {
		// 	$filter=$_REQUEST["filter"]; 
		// 	if ($filter=="top") {
		// 		$searchsql="select * from store_imformation order by  desc";# code...
		// 	}else{
		// 		$searchsql="select * from store_imformation,shop_message where SI_NO=SPMSG_NO"
		// 	}

			
		// 	$search=$connectPDO->query($searchsql);
			
		// 	$shopType=$_REQUEST["shopType"];
			
		// 	if ($shopType==0) {
		// 		header("Location:../../search.php");
		// 	}else{
		// 		header("Location:../../search_car.php");
		// 	}
			
			
		// 		header("Location:../../search.php");

		// }  //if 熱門 評價 分類 (分類+店家)




		// if (isset($_REQUEST["shopType"])) {

		// 	$shopType=$_REQUEST["shopType"];
			
		// 	$searchsql="select * from store_imformation where SI_TYPE='$shopType'";

		// 			if ($shopType==0) {
		// 				$search=$connectPDO->query($searchsql);
		// 				header("Location:../../search.php");
		// 			}else{
		// 				$search=$connectPDO->query($searchsql);
		// 				header("Location:../../search_car.php");
		// 			}  //跳轉哪一頁

		// } //if 只有選店家類型  直接跳頁商家還是胖小車





		// if () {
		// 	# code...
		// }


	


		// //===============================只有搜尋一種功能=================================











	}catch (PDOException $e) {
	echo "錯誤行號 : ", $e->getLine(), "<br>";
	echo "錯誤訊息 : ", $e->getMessage(), "<br>";	
	}









 ?>
</body>
</html>