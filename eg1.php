<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
	$originalVar="I am here";
	echo "Original Value : $originalVar <br>";
	if(is_string($originalVar)){
		echo "I am String";
	}else{
		echo "I am not String";
	}
	?>
</body>
</html>