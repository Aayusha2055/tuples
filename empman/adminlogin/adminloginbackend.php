<?php

session_start();
 include "../connection.php";

if ($_POST['submit']) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $hash_pass = hash('sha256', $password);


    $query = "SELECT * FROM admin where username='$username' && password = '$hash_pass'";
    $results = mysqli_query($con,$query);
//    echo $query;

    if (mysqli_num_rows($results) == 1){
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        $_SESSION['success'] = "You are now logged in";
        header('location: landing.php');
    }else{
        header('location: login.php');
    }
}else {
    array_push($errors, "Wrong username/password combination");
}
