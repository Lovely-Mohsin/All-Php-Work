
<?php
session_start();
require_once "./db-con.php";

if ($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['login'] == "submit") {

    $email = $_POST['email'];
    $password = $_POST['password'];

    // verify inputs are correct ?

    if ($email == "" || $password == "") {
        $_SESSION['error'] = "All fields are required...!";
        header("Location:login.php");
        exit;
    }

    // verify user is exist ?
    $sel_sql = "SELECT * FROM users WHERE email='$email'";
    $exists = mysqli_query($con, $sel_sql);

    if (mysqli_num_rows($exists) === 0) {
        $_SESSION['invalid'] = "Invalid Credentials!";
        header("Location:login.php");
        exit;
    }

    // if user exists then verify its password is correct ?
    $user = mysqli_fetch_assoc($exists);

    if ($password !== $user['password']) {
        $_SESSION['invalid'] = "Invalid Credentials!";
        header("Location:login.php");
        exit;
    }


    $_SESSION['login'] = true;
    $_SESSION['user_id'] = $user['id'];

    header("Location:index.php");
}
