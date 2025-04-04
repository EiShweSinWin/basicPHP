<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
	$var=true;
	$var1=[1,2,3];
	$var2=42;
	$var3=[1,2,3];
	var_dump($var2,$var3);
	echo "Original Value : $var <br>";

	if(is_bool($var)){
		echo "I am Boolean";
	}else if(is_array($var)){
		echo "I am array";
	}
	?>
</body>
</html>