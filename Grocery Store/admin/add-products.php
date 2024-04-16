<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Products</title>

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
            <h3> <i class="fa fa-eye text-primary"></i> View Products</h3>
            <hr>

            <div class="d-flex justify-content-end">
                <button class="btn btn-primary"><i class="fa fa-plus"></i> Add Proudcts</button>
            </div>

            <div class="form-container">
            <form action="" class="row">
                <div class="col-lg-4">
                    <label class="form-label" for="val-username">Category <span class="text-danger">*</span>
                    </label>
                    <input type="text" class="form-control" id="val-username" name="val-username" placeholder="Enter here..." required>
                </div>


                <div class="col-lg-4">
                    <label class="form-label" for="val-username">Category Image <span class="text-danger">*</span>
                    </label>
                    <input type="file" class="form-control" id="val-username" name="val-username" placeholder="Enter here..." required>
                </div>


                <div class="col-lg-4">
                    <label for=""></label>

                    <button class="btn btn-primary btn-lg mt-2 w-100">Add Category</button>
                </div>

            </form>
            </div>

        </div>






    </div> <!--*** Main wrapper end *****-->

    <!-- footer include -->
    <?php require_once("./includes/footer.php")  ?>

    <!-- javascript links include -->
    <?php require_once("./includes/javascript-links.php")  ?>




</body>

</html>