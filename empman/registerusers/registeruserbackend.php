<?php
session_start();

$username = "tuples";
$password = "tuples";
$hostname = "localhost";
$db_name = "tuples_db";

$first_name ="";
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

if (isset($_POST["reg_user"])){
    $first_name = mysqli_real_escape_string($con,$_POST['first_name']);
}

