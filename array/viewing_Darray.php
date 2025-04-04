<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
$myArray=[
	['Apple','Orange','Cherry'],
	['1000','20000','3000'],
	["Mg MG", "Thiri", "Ag Ag"],
	["Nyi Nyi", "Thiri", "Ag Ag"],

];
$rows=count($myArray);
$cols=count($myArray[0]);
for($i=0;$i<$rows;$i++){
	for($j=0;$j<$cols;$j++){
		echo $myArray[$i][$j] . ' ';
	}
	echo "<br>";
}

	?>
</body>
</html>