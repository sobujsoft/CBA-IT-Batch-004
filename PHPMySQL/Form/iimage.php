<?php

    $dbHost="localhost";
    $dbUser="root";
    $dbPassword="";
    $dbName="cbait_batch_four_test";
    $connection= mysqli_connect($dbHost,$dbUser,$dbPassword,$dbName);
    $message = "Image Form, Add Image";

    if(isset($_GET["message"])){
        $message = $_GET["message"];
    }


    if(isset($_POST['submitBtn'])){

        $file = $_FILES['image'];

        $file_name = uniqid()."_".$file['name'];
        $temp_file = $file['tmp_name'];
        $path = './uploads/';

        $sql = "INSERT INTO `image`(`img`) VALUES ('$file_name')";

        $run = mysqli_query($connection,$sql);

        if($run){

            $is_save = move_uploaded_file($temp_file, $path.$file_name);

            if($is_save){

                header('location:iimage.php?message=Image Successfully Saved');

            }else{

                header('location:iimage.php?message=Image Save Error.');

            }

        }else{
            header('location:iimage.php?message=Database Error.');
        }




    }


    if(isset($_POST['delete'])){
        $id = $_GET['did'];

        $selectSQL = "Select * from `image` where `id` = '$id'";

        $runSelect = mysqli_query($connection,$selectSQL);

        $data = mysqli_fetch_assoc($runSelect);

        $deleteSQL = "Delete from `image` where `id` = '$id'";

        $runDeleteSQL=mysqli_query($connection,$deleteSQL);

        if ($runDeleteSQL==true){

            $is_deleted = unlink('./uploads/'.$data['img']);

            if($is_deleted){
                header('location:iimage.php?message=Successfully Deleted!');
            }else{
                header('location:iimage.php?message=Failed ! Please Try Again');
            }


        }
        else{
            header('location:iimage.php?message=Failed ! Please Try Again');
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

            <?php if($message != ""){ ?>

                <div class="alert alert-success" role="alert">
                    <?php echo $message?>
                </div>

        <?php } ?>

        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input name="image" required class="form-control" type="file">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <input name="submitBtn" value="UPLOAD" class="form-control btn btn-success" type="submit">
                </div>
            </div>
        </div>
    </form>

    <div class="row">
        <div class="col-md-12">
            <h3 class="mt-4 text-success" align="center">Student List</h3>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Image</th>
                    <th colspan="2">Action</th>
                </tr>
                </thead>
                <tbody>

                <?php

                    $selectSQL="SELECT * FROM `image`";
                    $runSelect=mysqli_query($connection,$selectSQL);

                    while ($data=mysqli_fetch_assoc($runSelect)){

                ?>
                    <tr>
                        <td><img width="100px" src="./uploads/<?php echo $data['img']?>"></td>
                        <td><a href="formEdit.php?id=<?php echo $data['id']?>" class="btn btn-success">Edit</a></td>
                        <td><form method="post" action="iimage.php?did=<?php echo $data['id']?>"><input onclick="return onfirm('Do You Want To Delete ?')" name="delete" class="btn btn-danger" value="DELETE" type="submit"></form></td>
                    </tr>
                <?php } ?>

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
