<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
	$str="Hello, World!";
	$pos=strpos($str,"World");
	$string="Hello, PHP!";
	$substring=substr($string,7);
   $upperCase=strtoupper($string);
   $lowerCase=strlower($string);
   $trimed=trim($string);
   $fruits="apple,banana,orange";
   $array=explode(" ",$fruits);
   $newString=implode(" | ")
	?>
</body>
</html>