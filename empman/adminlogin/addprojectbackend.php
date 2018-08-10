<?php

session_start();

include "../connection.php";

if (isset($_POST['add'])){

    $project_name = mysqli_real_escape_string($con, $_POST['project_name']);
    $user_name = mysqli_real_escape_string($con, $_POST['user_name']);
    $project_type = mysqli_real_escape_string($con, $_POST['project_type']);
    $client_name = mysqli_real_escape_string($con, $_POST['client_name']);
    $project_manager = mysqli_real_escape_string($con,$_POST['project_manager']);
    $budget = mysqli_real_escape_string($con, $_POST['budget']);
    $status = mysqli_real_escape_string($con, $_POST['status']);
    $deadline = mysqli_real_escape_string($con, $_POST['deadline']);
    $start_date = mysqli_real_escape_string($con, $_POST['start_date']);
    $end_date = mysqli_real_escape_string($con, $_POST['end_date']);
    $git_link = mysqli_real_escape_string($con, $_POST['git_link']);
    $remarks = mysqli_real_escape_string($con, $_POST['remarks']);


    $query = "INSERT INTO add_project(project_name,project_type,client_name,project_manager,budget,status,deadline,start_date,end_date,git_link,remarks)
                  VALUES('$project_name','$project_type','$client_name','$project_manager','$budget','$status','$deadline','$start_date','$end_date','$git_link','$remarks') ";
    echo $query;
    mysqli_query($con,$query);
    $_SESSION['project_name'] = $project_name;
    $_SESSION['success'] = "project successfully added";
    header('location:landing.php');
}
else {
    array_push($errors, "Couldn't successfully insert data to the database!!");
}
