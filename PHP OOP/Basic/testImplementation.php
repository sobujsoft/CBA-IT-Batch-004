<?php
include 'testClass.php';

$obj= new testClass();
//$obj->sum();

//echo $obj->calculate(50,30);

//$obj->sobuj();


$aponVaiSelectSQL="SELECT * FROM `apon_vai`";
$selectedData= $obj->selectData($aponVaiSelectSQL);

while($data= mysqli_fetch_assoc($selectedData)){
    echo $data['f_name'];
}


?>