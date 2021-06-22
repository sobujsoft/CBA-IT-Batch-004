<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login </title>
    <link rel="stylesheet" href="{{ asset('/LoginAsset/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/LoginAsset/css/toastr.min.css') }}">


    <style>
        .btn-design {
            color: #000;
            border-color: #ffc107 !important;
        }
    </style>


</head>

<body style="background-color: #232e33;">


<div class="container ">
    <div style="margin-top: 150px;" class="row ">
        <div style="background-color: #1b2028;border-radius: 10%;" class="col-md-6 mx-auto ">
            <h3 class="text-center text-white mt-3"> <strong> <i> ADMIN PANEL </i> </strong> </h3>
            <form class="px-5 pb-5" action="" method="POST">
                <div class="mb-3 py-2">
                    <label for="email" class="form-label"> <i class="text-white"> <strong> EMAIL </strong>
                        </i> </label>
                    <input name="email" type="email" class="form-control" id="email">
                </div>
                <div class="mb-3 py-2">
                    <label for="password" class="form-label"> <i class="text-white"> <strong> PASSWORD </strong>
                        </i> </label>
                    <input name="password" type="password" class="form-control" id="password">
                </div>

                <button type="submit" class="btn btn-design"> <i class="text-white"> <strong> LOGIN </strong> </i>
                </button>
            </form>

        </div>
    </div>
</div>



<script src="{{ asset('/LoginAsset/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('/LoginAsset/js/jquery.js') }}"></script>
<script src="{{ asset('/LoginAsset/js/toastr.min.js') }}"></script>
<script src="{{ asset('/LoginAsset/js/config.js') }}"></script>
</body>

</html>
