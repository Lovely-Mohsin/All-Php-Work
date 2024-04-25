<?php

// db connection

require_once "./db-con.php";
require_once "./includes/helpers.php";


if($_SERVER['REQUEST_METHOD'] == 'POST'){

    // echo "<pre>"; print_r($_POST); echo "</pre>";
    // echo "<pre>"; print_r($_FILES); echo "</pre>";

        // upload image
        $data = uploadImage("user", $_FILES['image']);

        if ($data['errors'] === false) {
            // save info into db
            $name = $data['result'];
            $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

            // echo $name;
            // exit;

            $query = "INSERT INTO `users`(`name`, `email`, `password`, `address`, `mobile`,`description`,`image`) 
            VALUES ('$_POST[name]','$_POST[email]' ,'$password','$_POST[address]','$_POST[mobile]', '$_POST[description]','$name') ";
    
            if (mysqli_query($con, $query)) {
                session_start();
                $_SESSION['send'] = 'User Added Successfully';
                header("Location:add-user.php");
            }

        }

}


?>