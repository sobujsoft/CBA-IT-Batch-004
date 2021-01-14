<?php
include 'connection.php';

$seletSQL="SELECT * FROM `image`";
$runSelect=mysqli_query($connection,$seletSQL);

if (isset($_POST['submitBtn'])){
    $uniqueID= date("Y-M-D-H-i-s");
    $imageOldName= $_FILES['image_khan_bahadur']['name'];
    $imageNewName= $uniqueID.'_sobuj_'.$imageOldName;
    $image_temp= $_FILES['image_khan_bahadur']['tmp_name'];
    move_uploaded_file($image_temp,"image/$imageNewName");

    $image_insert_sql="INSERT INTO `image`(`img`) VALUES ('$imageNewName')";
    $runInsertSQL=mysqli_query($connection,$image_insert_sql);
    if ($runInsertSQL==true){
        header('location:image.php?message=Success');
    }
    else{
        header('location:image.php?message=Failed');
    }
}

if (isset($_POST['DeleteBtn'])){
    $ID=$_GET['id'];
    $imageName=$_GET['image'];

    unlink("image/$imageName");

    $deleteSQL="DELETE FROM `image` WHERE `id`='$ID'";
    $runDelete=mysqli_query($connection,$deleteSQL);
    if ($runDelete==true){
        header('location:image.php?message=Success');
    }
    else{
        header('location:image.php?message=Failed');
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

    <title>Image Upload</title>
</head>
<body>

<div class="container">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-12 text-center m-3">
                <h3>Image Upload</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input name="image_khan_bahadur" required class="form-control" type="file">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <input name="submitBtn" value="UPLOAD" class="form-control btn btn-success" type="submit">
                </div>
            </div>
        </div>
    </form>

    <div class="row mt-5">
        <div class="col-12">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php while ($data=mysqli_fetch_assoc($runSelect)){?>
                <tr>
                    <td><?php echo $data['id']?></td>
                    <td><img style="height: 100px;width: 100px;" src="image/<?php echo $data['img']?>"></td>
                    <td><form action="image.php?id=<?php echo $data['id']?>&image=<?php echo $data['img']?>" method="post"><input name="DeleteBtn" class="btn btn-danger" value="DELETE" type="submit"></form></td>
                </tr>
                <?php }?>
                </tbody>
            </table>
        </div>
    </div>
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
