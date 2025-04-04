<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
	$num=16;
	$sqrt=sqrt($num);
	$power=pow($num,2);
	$abs=abs(-25);
	$round=round(3.6);
	$num=4.6;
	echo round($num);
	echo ceil($num);
	echo floor($num);
	echo max(5,8,2,10,3);
	echo min(5,8,2,10,3);
	$numbers=[5,8,2,10,3];
	echo max($numbers);
	echo min($numbers);
	?>
</body>
</html>