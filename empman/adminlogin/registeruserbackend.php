<?php
session_start();

$first_name = "";
$last_name = "";
$address = "";
$phone_number = "";
$role = "";
$status = "";
$start_date = "";
$end_date = "";
$email = "";
$user_name = "";
$password = "";
$confirm_password = "";

include "../connection.php";


//register

if (isset($_POST["reg_user"])) {
    $first_name = mysqli_real_escape_string($con, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($con, $_POST['last_name']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $phone_number = $_POST['phone_number'];
    $role = mysqli_real_escape_string($con, $_POST['role']);
    $status = mysqli_real_escape_string($con, $_POST['status']);
    $start_date = mysqli_real_escape_string($con, $_POST['start_date']);
    $end_date = mysqli_real_escape_string($con, $_POST['end_date']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $user_name = mysqli_real_escape_string($con, $_POST['user_name']);
    $password = hash('sha256', $_POST['password']);
    $confirm_password = hash('sha256', $_POST['confirm_password']);
    $hash_pass = hash('sha256', $password);


    $query = "INSERT INTO employee(first_name,last_name,address,phone_number,role,status,start_date,end_date,email,user_name,password,confirm_password)
                  VALUES('$first_name','$last_name','$address','$phone_number','$role','$status','$start_date','$end_date','$email','$user_name','$password','$confirm_password') ";

//    echo "$query";
    $result = mysqli_query($con, $query);
    if ($result) {
        $_SESSION['user_name'] = $user_name;
        $_SESSION['success'] = "register completed";
        header('location: landing.php');
    } else {

        echo "<script type='text/javascript'>alert('Passwords do not match!');
                document.location.href='registeruser.php'</script>";
    }


}

//login

if (isset($_POST["login_user"])) {

    $user_name = mysqli_real_escape_string($con, $_POST['user_name']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $hash_pass = hash('sha256', $password);

    $query = "SELECT * FROM employee where user_name='$user_name' and password='$hash_pass'";
    $results = mysqli_query($con, $query);

    if (mysqli_num_rows($results) == 1) {
        $_SESSION['user_name'] = $user_name;
        $_SESSION['password'] = $password;
        $_SESSION['success'] = "You are now logged in";
        echo "<script type=\"text/javascript\">" .
            "alert('Successfully Logged In');
                window.location.href='index.php';" .
            "</script>";
    } else {
        echo "<script type=\"text/javascript\">" .
            "alert('Username / password wrong!!!');
                window.location.href='userlogin.php';" .
            "</script>";
    }

} else {
    array_push($errors, "Wrong username/password combination");
}
