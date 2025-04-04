<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
	$number=12345.6789;
	$formatted=number_format($number,2);
	$formattedCurrency=number_format($number,2,'.',',');
	echo "$formatted";
	echo "$formattedCurrency";
	?>
</body>
</html>