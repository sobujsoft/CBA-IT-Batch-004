<?php
include 'phpAction/model.php';
$modelObj= new model();
$tableData=$modelObj->selectRegData();

if (isset($_POST['submit'])){
    $insert=$modelObj->regDataInsert();
    if ($insert==true){
        echo "Success";
    }
    else{
        echo "Failed";
    }
}

if(isset($_POST['DeleteBtn'])){
    $deleteID= $_GET['id'];
    $deleted= $modelObj->DeleteRegData($deleteID);
    if ($deleted==true){
        header('location:index.php');
    }
    else{
        echo "Failed! Try Again";
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Test Reg. Form</title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 align="center">Registration Now</h1>
        </div>
    </div>

    <form action="" method="post">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label>Name</label>
                    <input name="name" class="form-control" type="text">
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label>Email</label>
                    <input name="email" class="form-control" type="email">
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label>Phone No</label>
                    <input name="phone" class="form-control" type="text">
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label>Address</label>
                    <input name="address" class="form-control" type="text">
                </div>
            </div>

            <div class="col-md-4 pt-4">
                <div class="form-group">
                    <input name="submit" value="SAVE" class="form-control btn btn-success" type="submit">
                </div>
            </div>
        </div>
    </form>

    <div class="row">
        <div class="col-12">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone No</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php while($data=mysqli_fetch_assoc($tableData)){?>
                <tr>
                    <td><?php echo $data['name']?></td>
                    <td><?php echo $data['email']?></td>
                    <td><?php echo $data['phone']?></td>
                    <td><?php echo $data['address']?></td>
                    <td><form action="index.php?id=<?php echo $data['id']?>" method="post"><input name="DeleteBtn" class="btn btn-danger" value="DELETE" type="submit"></form></td>
                </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
-->
</body>
</html>
