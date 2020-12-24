<?php 


/* echo "Hello World";
print_r(" <br> Hello World Two <br>");

*/

$a=10;
$b=3;

$c=$a%$b;

$string="This is a string";
$int= 500;
$double=10.99;
$boolean=false;


// echo $c;

function TestFunction($x,$y){
	
	$z=$x+$y;
	// echo $z;
	return $z;
}

// echo TestFunction(10,20);

$TestArray=["Fish","Meat","Dog","Cat"];
// print_r($TestArray[0]);

// $countResult= count($TestArray);
// echo $countResult;

// for($i = 0; $i < count($TestArray); $i++){
// 	echo $TestArray[$i]."<br>";

// }

// foreach ($TestArray as $el) {
// 	echo $el."<br>";
// }

$number = 10;

if($number%2 == 0){
	echo "Even";
}else{
	echo "Odd";
}


$char = "dfdf";

switch ($char) {
	case "A":
		echo "A";
		break;
	case "B":
		echo "B";
		break;
	default:
		echo "Nothing";
}


?>