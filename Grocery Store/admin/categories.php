<?Php

// Databes Connection
$db_conn = mysqli_connect('localhost', 'root', '', 'ogani_store');
if($db_conn){
    // echo 'Database is Connected';
}

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    
    $category = $_POST['category'];

    $targetdir = "./images/categories/";
    $newName = time() . $_FILES['image']['name'];

    $max_size = 5 * 1024 * 1024;
    if($_FILES['image']['error'] === 0){
        if($_FILES['image']['size'] > $max_size){
            die ("Image Size is too large");
        }
        move_uploaded_file($_FILES['image']['tmp_name'] , $targetdir . $newName);

        $query = "INSERT INTO categories VALUES(null , '$category' , '$newName')";

        if(mysqli_query($db_conn, $query)){
            echo 'Successfully Created';
        }
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Categories - Home</title>

    <!-- css-links include -->
    <?php require_once("./includes/css-links.php") ?>

</head>

<body>

    <!-- navbar include -->
    <?php require_once("./includes/navbar.php") ?>

    <!-- sidebar include -->
    <?php require_once("./includes/sidebar.php") ?>

    <div class="content-body p-3">


        <!-- add category container -->
        <div class="container mt-3 bg-white p-4">

            <h3> <i class="fa fa-plus text-primary"></i> Add Category</h3>
            <hr>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data" class="row">
                <div class="col-lg-4">
                    <label class="form-label" for="val-username">Category <span class="text-danger">*</span>
                    </label>
                    <input type="text" class="form-control" id="val-username" name="category" placeholder="Enter here..." required>
                </div>


                <div class="col-lg-4">
                    <label class="form-label" for="val-username">Category Image <span class="text-danger">*</span>
                    </label>
                    <input type="file" class="form-control" id="val-username" name="image" placeholder="Enter here..." required>
                </div>


                <div class="col-lg-4">
                    <label for=""></label>

                    <button class="btn btn-primary btn-lg mt-2 w-100">Add Category</button>
                </div>

            </form>
        </div>



        <!-- view categories container -->
        <div class="container mt-3 bg-white p-4">
            <h3> <i class="fa fa-eye text-primary"></i> View Categories</h3>
            <hr>


            <div class="table-responsive">
                <table class="table table-striped table-bordered zero-configuration">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Actions</button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Link 1</a> 
                                        <a class="dropdown-item" href="#">Link 2</a> 
                                        <a class="dropdown-item" href="#">Link 3</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Garrett Winters</td>
                            <td>Accountant</td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Actions</button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Link 1</a> 
                                        <a class="dropdown-item" href="#">Link 2</a>
                                         <a class="dropdown-item" href="#">Link 3</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Ashton Cox</td>
                            <td>Junior Technical Author</td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Actions</button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Link 1</a> 
                                        <a class="dropdown-item" href="#">Link 2</a> 
                                        <a class="dropdown-item" href="#">Link 3</a>
                                    </div>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>Cedric Kelly</td>
                            <td>Senior Javascript Developer</td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Actions</button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Link 1</a>
                                         <a class="dropdown-item" href="#">Link 2</a>
                                          <a class="dropdown-item" href="#">Link 3</a>
                                    </div>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>Airi Satou</td>
                            <td>Accountant</td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Actions</button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Link 1</a> 
                                        <a class="dropdown-item" href="#">Link 2</a> 
                                        <a class="dropdown-item" href="#">Link 3</a>
                                    </div>
                                </div>
                            </td>

                        </tr>
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