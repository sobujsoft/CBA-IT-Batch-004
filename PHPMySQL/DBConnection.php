<?php

//connect with database
//host, DataBase User Name, DataBase Password, DataBase Name

$dbHost="localhost";
$dbUser="root";
$dbPassword="";
$dbName="cbait_batch_four_test";
$connection= mysqli_connect($dbHost,$dbUser,$dbPassword,$dbName);
//connection end


$selectSQL="SELECT * FROM `students`";

$name="Nazmul";
$phone="014568764";
$email="nazmul@gmail.com";

$insertSQL="INSERT INTO `students`(`name`, `phone`, `email`) VALUES ('$name','$phone','$email')";

$deleteSQL="DELETE FROM `students` WHERE `id`=4";

$run= mysqli_query($connection,$insertSQL);

if ($run==true){
    echo "Success";
}
else{
    echo "Failed";
}







?>