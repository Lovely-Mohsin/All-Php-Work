<?php
require_once("./db-con.php");

if($_SERVER['REQUEST_METHOD'] == "POST"  && $_POST['submit'] == "login"){   
}
?>

<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Login</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../Bootstrap/css/bootstrap.min.css">
    <script src="../Bootstrap/js/bootstrap.bundle.min.js"></script>
    
</head>

<body class="h-100">
    
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <div class="row m-0 my-5">

<div class="col-lg-4 col-md-5 col-sm-7 p-5 mx-auto shadow mt-2 p-5">
<div>
    <?php
    session_start();
    if(!empty($_SESSION['error'])){
        $msg = $_SESSION['error'];
        echo "<div class='alert alert-danger alert-dismissible fade show CredErr'>
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span>
        </button> <strong>Warning!</strong>$msg</div>";
        unset($_SESSION['error']);
    }

    if(!empty($_SESSION['invalid'])){
        $msg = $_SESSION['invalid'];
        echo "<div class='alert alert-danger alert-dismissible fade show CredErr'>
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span>
        </button> <strong>Warning! </strong> $msg</div>";
        unset($_SESSION['invalid']);
    }

    ?>
</div>
    <form method="POST" action="./login-qry.php" class="p-4">
        <h3 class="text-center">Login Form</h3>
        <div class="mb-4">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter here...">
        </div>
        <div class="mb-4">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" placeholder="Enter here..." name="password" id="exampleInputPassword1">
        </div>

        <button type="submit" name="login" class="btn btn-success d-block w-100 mx-auto" value="submit">Submit</button>
    </form>
</div>
</div>

    
    <!-- javascript links include -->
    <?php require_once("./includes/javascript-links.php")  ?>
</body>
</html>
<script>
        $(document).ready(function() {
            setTimeout(function() {
                $(".CredErr").hide();
            }, 3000);

        })
    </script>




