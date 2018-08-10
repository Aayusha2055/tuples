<?php

include 'registeruserbackend.php';
include '../connection.php';

//punch in


if (isset($_POST['in'])) {
    $user_name = $_SESSION['user_name'];
    $query = "INSERT INTO punchin (user_name) VALUES ('$user_name')";
    mysqli_query($con, $query);
    header('location: out.php');
}

if (isset($_POST['out'])) {
    $user_name = $_SESSION['user_name'];
    $query = "INSERT INTO punchout(user_name) VALUES ('$user_name')";
    mysqli_query($con, $query);
    header('location:index.php');

    $query1 = "SELECT * FROM punchout WHERE user_name = '$user_name' ";
    echo $query1;
    $result=mysqli_query($con, $query1);
    $run = mysqli_fetch_array($result);
    $out_time = $run[2];

    $query2 = "INSERT INTO punchin(out_time) VALUES ('$out_time')";
    echo $query2;


    echo $out_time;


if (isset($_POST['data'])){
    $data = mysqli_real_escape_string($con,$_POST['data']);

    $query = "INSERT INTO punchout(accomplishment) VALUES ('$data')";
    echo $query;
}

}




