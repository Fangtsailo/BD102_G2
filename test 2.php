<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 

	$a = "abcde.jpg";

	$c = "001";

	$d = $c.substr($a,strpos($a,'.'));

	echo $d;

	$e= 2;

	switch ($e) {
		case ($e==1 || $e == 2):
			
			echo "1 or 2";
			
			break;
		case ($e ==3 || $e == 4):
			
			echo "3 or 4";

			break;

		default:

			break;
	}



	 ?>
</body>
</html>