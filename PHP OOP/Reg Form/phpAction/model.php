<?php
include 'connection.php';
class model{

    function regDataInsert(){
        $name=trim($_POST['name']);
        $email=trim($_POST['email']);
        $phone=trim($_POST['phone']);
        $address=trim($_POST['address']);

        $insertSQL="INSERT INTO `registration`(`name`, `email`, `phone`, `address`) VALUES ('$name','$email','$phone','$address')";
        $connectionObj= new connection();
        $result= $connectionObj->runSQLQuery($insertSQL);
        if ($result==true){
            return true;
        }
        else{
            return false;
        }

    }

    function selectRegData(){
        $selectSQL="SELECT * FROM `registration`";
        $connectionObj= new connection();
        $result=$connectionObj->runSQLQuery($selectSQL);
        if ($result==true){
            return $result;
        }
        else{
            return false;
        }
    }

    function DeleteRegData($id){
        $deleteSQL="DELETE FROM `registration` WHERE `id`='$id'";
        $connectionObj= new connection();
        $result=$connectionObj->runSQLQuery($deleteSQL);
        if ($result==true){
            return true;
        }
        else{
            return false;
        }
    }
}

?>