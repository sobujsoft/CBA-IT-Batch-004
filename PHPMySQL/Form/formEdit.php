<?php
include "connection.php";
$id= $_GET['id'];
$email=$_GET['email'];
echo $email;
$selectData="SELECT * FROM `students` WHERE `id`='$id'";
$runSelectSQL=mysqli_query($connection,$selectData);

$data=mysqli_fetch_assoc($runSelectSQL);


if (isset($_POST['update'])){
    $name= $_POST['name_edit'];
    $phone= $_POST['phone_edit'];
    $email= $_POST['email_edit'];
    $updateSQL="UPDATE `students` SET `name`='$name',`phone`='$phone',`email`='$email' WHERE `id`='$id'";

    $runUpdate= mysqli_query($connection,$updateSQL);

    if ($runUpdate==true){
        header('location:form.php?message=Successfully Updated');

    }
    else{
        echo "Failed ! Please Try Again";
    }
}


?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Form Edit</title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3 align="center">Edit Data</h3>
        </div>
    </div>
    <form method="post" action="">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Name</label>
                    <input required value="<?php echo $data['name']?>" name="name_edit" class="form-control" type="text">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>Phone No</label>
                    <input value="<?php echo $data['phone']?>" name="phone_edit" class="form-control" type="text">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>Email</label>
                    <input value="<?php echo $data['email']?>" name="email_edit" class="form-control" type="text">
                </div>
            </div>

            <div class="col-md-6 pt-4">
                <div class="form-group">
                    <input name="update" value="UPDATE" class="form-control btn btn-success" type="submit">
                </div>
            </div>

        </div>
    </form>
</div>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<!-- Option 2: jQuery, Popper.js, and Bootstrap JS
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
-->
</body>
</html>