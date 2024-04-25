<?php  require_once("./auth.php") ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Users</title>

    <!-- css-links include -->
    <?php require_once("./includes/css-links.php") ?>

</head>

<body>

    <!-- navbar include -->
    <?php require_once("./includes/navbar.php") ?>

    <!-- sidebar include -->
    <?php require_once("./includes/sidebar.php") ?>

    <div class="content-body p-3">




        <!-- view categories container -->
        <div class="container mt-3 bg-white p-4">
            <div class="row">
                <div class="col-md-4">
                    <h3> <i class="fa fa-plus text-success"></i> View User</h3>
                </div>
                <div class="col-md-8">
                    <?php
                    if (!empty($_SESSION['message'])) {
                        $msg = $_SESSION['message'];
                        echo "<div class='alert alert-success alert-dismissible fade show CredErr'>
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span>
                        </button> <strong>Congratulations!</strong> $msg</div>";
                        unset($_SESSION['message']);
                    }
                    ?>
                </div>
            </div>
            <hr>

            <div class="d-flex justify-content-end">
                <a href="./add-user.php" class="btn btn-success text-white"><i class="fa fa-plus"></i> Add User</a>
            </div>

            <div class="table-responsive">
                <table class="table table-striped table-bordered zero-configuration">
                    <thead>
                        <tr>
                            <th>Photo</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Address</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>


                        <?php

                        require_once("./db-con.php");
                        $get_users = "SELECT * FROM users";

                        $result = mysqli_query($con, $get_users);

                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $id = $row['id'];


                        ?>

                                <tr>
                                    <td><img src="./images/user/<?php echo $row['image'] ?>" alt="Product Image" height="60px"></td>
                                    <td><?= $row['name'] ?></td>
                                    <td><?= $row['email'] ?></td>
                                    <td><?= $row['mobile'] ?></td>
                                    <td><?= $row['address'] ?></td>
                                    <td><span class="badge bg-danger text-white p-1"><?= $row['role'] ?></span></td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-success text-white dropdown-toggle" data-toggle="dropdown">Actions</button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="">Edit</a>
                                                <a class="dropdown-item" href="./delete-user.php?id=<?=$id?>">Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                        <?php
                            }
                        }
                        ?>

                    </tbody>
                </table>
            </div>

        </div>






    </div> <!--*** Main wrapper end *****-->

    <!-- footer include -->
    <?php require_once("./includes/footer.php")  ?>

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