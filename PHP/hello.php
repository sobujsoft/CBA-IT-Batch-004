<?php 

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

?>