<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
	// $myArray=[10,20,30];
	// foreach($myArray as $myArray){
	// 	echo $item . "\n";
	// }
	// $arrayLength=count($myArray);
	// for($i=0;$i<$arrayLength;$i++){
	// 	echo $myArray[$i] . "\n";
	// }
	//associative array
	$namesAge=array('Lin Lin'=>"20",'Kyaw Kyaw'=>"16","Aye Aye"=>"43");
	echo $namesAge['Lin Lin']="20";
	// $namesAge["Kyaw Kyaw"]="16";
	// $namesAge["Aye Aye"]="43";
	//Viewing Associative Array
	
	// $person=[
	// 	"name"=>"Kyaw Kyaw",
	// 	"age"=>30,
	// 	"email"=>"kyawkyaw@gmail.com"
	// ];
	// foreach ($person as $key=>$value){
	// 	echo "$key:$value<br>";
	// }
	//Accessing Specific elements
	$person=[
		"name"=>"Kyaw Kyaw",
		"age"=>30,
		"email"=>"kyawkyaw@gmail.com"
	];
	echo "Name:".$person["name"];
	?>
</body>
</html>