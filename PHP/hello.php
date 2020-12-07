<?php 
/*
//echo('5+7');

$a=20;
$b=30;

echo $a;
echo "<br>";

$a=50;
echo $a;

echo "<br>";

define('PI',3.1416);
echo PI;

echo "<br>";

$name="Hello I am Sobuj";

function TestFunction(){
    $k=20;
    $l=50;
    $p=$k+$l;
    echo $p;
}

function ParameterTest($q,$r){
    $t=$q+$r;
    return $t;
}

echo ParameterTest(250,699);
echo "<br>";

$ariful=86;

if ($ariful==85){
    echo "Yes ! Ariful got 85 Marks";
}
else if ($ariful<35){
    echo "Ariful Failed";
}
else if ($ariful>85){
    echo "Congratulation";
}
else{
    echo "Out of our condition";
}

echo "<br>";

for ($i=0;$i<10;$i++){
    echo $i."Hello I am for Loop <br>";
}

echo "<br>";

//1-12-2020-class
echo "1-12-2020-class";echo "<br>";


$number=9;
$result=1;
for($i=$number;$i>0; $i--){
    $result *= $i;
}
echo $result;
echo "<br>";


$namtaNumber=12;
for($i=1;$i<11;$i++){
    $namtaResult=$namtaNumber*$i;
    echo $namtaNumber." x ".$i." =".$namtaResult."<br>";
}

$testArray=["Apon","Nazmul","Chandan",456];

print_r($testArray[3]) ;

echo "<br>";

//associative array

$associativeArray=["Name"=>"Ariful","Age"=>"18-","Address"=>"Gazipur,Dhaka"];

print_r($associativeArray['Age']);

echo "<br>";


for ($i=0;$i<count($testArray);$i++){
    print_r($testArray[$i]."<br>");
}

*/
//03-12-2020

$name="Sobuj";
//echo "My Name Is {$name}";

$number=123456.56;

//var_dump($number);

$firstName="Sobuj";
$lastName="Ahmed";
$middleName="Nai";
//echo "My first name is {$firstName} and last name is {$lastName}";

//echo $firstName."\n".$lastName;

//printf("My first name is %s Middle name is %s and my last name is %s",$firstName,$middleName,$lastName);

$output= sprintf("My first name is %s Middle name is %s and my last name is %s",$firstName,$middleName,$lastName);

//echo $output;

//printf(-5%3);

$x=2;
$y=5;
//$result=$x**$y;
//echo $result;

$result=$x+$y;
echo $x*=$y;

?>


