<?php
session_start();
include("./db-con.php");

if(!empty( $_SESSION['user_id'] )){

    $delete_user_qry = "DELETE FROM users WHERE id = '$_SESSION[user_id]'";
    $delete_user_qry_run = mysqli_query($con,$delete_user_qry);
    if($delete_user_qry_run){
        header("Location:view-user.php");
    }
}

?>

