<?php
session_start();
include('connect.php');
if (isset($_POST['email']) &&  isset($_POST['password'])) {
    $email    = stripcslashes(strtolower($_POST['email']));
    $pass_md5 = md5($_POST['password']);
    $username = filter_input(INPUT_POST, 'username');
    $password = stripcslashes(strtolower($_POST['password']));
    $email  = htmlentities(mysqli_real_escape_string($conn, $_POST['email']));
    $password  = htmlentities(mysqli_real_escape_string($conn, $_POST['password']));
}

if (empty($email)) {
    $email_error = "<p> Enter your email</p>";
    $errors = 1;
}

if (empty($password)) {
    $password_error = "<p> Enter your password</p>";
    $errors = 1;
    include('customer-sign-in.php');
}
// else{
//     include('sign-in.php');
// }
if (!isset($errors)) {
    $sql = "SELECT `email` , `password` FROM `customer` WHERE `email` = '$email' AND `password` = '$pass_md5' ";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    // echo $row['email'];
    // echo $row['password'];
    // echo $email;
    // echo $password;
    if ($row['email'] === $email && $row['password'] === $pass_md5) {
        header('Location: customer-profile.html');
        exit();
    } else {
        $erroremail = "Invaild Email or Password";
        include('customer-sign-in.php');
    }
}
