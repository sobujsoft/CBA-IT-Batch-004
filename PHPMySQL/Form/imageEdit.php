<?php
include 'connection.php';

$ID=$_GET['id'];
$selectSQL="SELECT * FROM `image` WHERE `id`='$ID'";
$runSelect=mysqli_query($connection,$selectSQL);
$editData=mysqli_fetch_assoc($runSelect);

$OldImage=$editData['img'];

//edit code start

if (isset($_POST['updateBtn'])){

    $uniqueID= date("Y-M-D-H-i-s");
    $imageOldName= $_FILES['imageEdit']['name'];
    $imageNewName= $uniqueID.'_sobuj_'.$imageOldName;
    $image_temp= $_FILES['imageEdit']['tmp_name'];
    move_uploaded_file($image_temp,"image/$imageNewName");
    unlink("image/$OldImage");

    $updateSQL="UPDATE `image` SET `img`='$imageNewName' WHERE `id`='$ID'";
    $runUpdate=mysqli_query($connection,$updateSQL);
    if ($runUpdate==true){
        header('location:image.php');
    }
    else{
        echo 'Failed';
    }


}


?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Update Image</title>
</head>
<body>

<div class="container">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-6">
                <img style="width: 100%" src="image/<?php echo $editData['img']?>">
                <div class="form-group">
                    <input required name="imageEdit" class="form-control"  type="file">
                </div>
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <div class="form-group">
                    <input name="updateBtn" class="form-control btn btn-success" value="UPDATE" type="submit">
                </div>
            </div>
        </div>
    </form>
</div>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
-->
</body>
</html>
