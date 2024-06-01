<?php
include('connect.php');
// echo "gg";    
if (isset($_POST['submit'])) {

    $firstname = stripcslashes(strtolower($_POST['firstname']));
    $lastname = stripcslashes(strtolower($_POST['lastname']));
    $email = stripcslashes($_POST['email']);
    $password = stripcslashes($_POST['password']);
    $c_password = stripcslashes($_POST['c_password']);
    $phone = stripcslashes($_POST['phone']);
    $firstname  = htmlentities(mysqli_real_escape_string($conn, $_POST['firstname']));
    $lastname  = htmlentities(mysqli_real_escape_string($conn, $_POST['lastname']));
    $email  = htmlentities(mysqli_real_escape_string($conn, $_POST['email']));
    $password  = htmlentities(mysqli_real_escape_string($conn, $_POST['password']));
    $phone  = htmlentities(mysqli_real_escape_string($conn, $_POST['phone']));
    $md5_pass = md5($password);


    if (empty($firstname)) {
        $firstname_error = 'required';
        $err_s = 1;
    } elseif (strlen($firstname) < 2) {
        $firstname_error = "First name must be letters only.";
        $err_s = 1;
    } elseif (filter_var($firstname, FILTER_VALIDATE_INT)) {
        $firstname_error = "First name must be letters only.";
        $err_s = 1;
    }


    if (empty($lastname)) {
        $lastname_error = 'required';
        $err_s = 1;
    } elseif (strlen($lastname) < 2) {
        $lastname_error = "First name must be letters only.";
        $err_s = 1;
    } elseif (filter_var($lastname, FILTER_VALIDATE_INT)) {
        $lastname_error = "Last name must be letters only.";
        $err_s = 1;
    }


    if (empty($email)) {
        $email_error = "Email can not be empty.";
        $err_s = 1;
    }

    if ($password != $c_password) {
        $c_password_error = 'Password does not match';
        $err_s = 1;
    }

    if (empty($password)) {
        $password_error = 'Passowrd can not be empty';
        $err_s = 1;
    }

    if (empty($phone)) {
        $phone_error = 'Phone can not be empty';
        $err_s = 1;
        include('sign-up.php');
    } else {
        if ($err_s == 0) {
            $sql = "INSERT INTO `worker` (`first-name` , `last-name` , `email` , `password` , `phone-number` ) 
            VALUES ('$firstname' , '$lastname' , '$email' , '$md5_pass' , '$phone')";
            mysqli_query($conn, $sql);
            header("location:http://localhost/Graduation%20Project/");
        } else {
            include('sign-up.php');
        }
    }
}
