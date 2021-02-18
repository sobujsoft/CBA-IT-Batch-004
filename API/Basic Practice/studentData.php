<?php
include 'connection.php';
$selectSQL="SELECT * FROM `students`";
$run= mysqli_query($connection,$selectSQL);

while ($data[]=mysqli_fetch_assoc($run)){
    $item=$data;
    $json= json_encode(array('student_data'=>$item));
}
echo $json;


?>