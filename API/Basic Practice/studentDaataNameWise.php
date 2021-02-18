<?php
include 'connection.php';
$userName= $_POST['userNameHabijabi'];
$selectSQL="SELECT * FROM `students` WHERE `name`='$userName'";
$run=mysqli_query($connection,$selectSQL);
while ($data[]=mysqli_fetch_assoc($run)){
    $item=$data;
    $json=json_encode(array('student_individual_data'=>$item));
}
echo $json;

?>