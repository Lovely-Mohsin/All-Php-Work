<?php

include("./db-con.php");

$id = $_GET['id'];

if(!empty($id)){

    $delete_user_qry = "DELETE FROM users WHERE id = $id";
    $delete_user_qry_run = mysqli_query($con,$delete_user_qry);
    if($delete_user_qry_run){
        session_start();
        $_SESSION['message'] = "Operation Performed Successfully...!";
        header("Location:view-user.php");
    }
}

?>

