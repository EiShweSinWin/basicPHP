<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
$myarray = array(
    array("Mya Mya", "Kyaw Kyaw", "Mg Mg"),
    array("Ko Ko", "Thiri", "Ag Ag"),
	array("Mg MG", "Thiri", "Ag Ag"),
	array("Nyi Nyi", "Thiri", "Ag Ag"),
);
foreach ($myarray as $row) {
    // Inner foreach loop for each name in row
    foreach ($row as $name) {
        echo $name . "<br>";
    }
}
foreach ($row as $name) {
	echo $name . "<br>";
}
echo $myarray[3][0];
	?>
</body>
</html>