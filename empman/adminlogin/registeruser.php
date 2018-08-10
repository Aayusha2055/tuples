<?php
    if (isset($_POST['logout'])) {
    unset($_SESSION['username']);
    session_unset();
    session_destroy();
    $_SESSION = [];
    header('location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register User</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="logincss.css">
</head>
<body>

<nav class="navbar navbar-default">
    <div class="container-fluid" style="margin-bottom: -25px">
        <div class="navbar navbar-expand-sm bg-light navbar-dark">
            <img src="../Logo4T.png" alt="Logo" style="width:150px;">
        </div>
    </div>
</nav>

<nav class="navbar navbar-default" role="navigation"  style="background-color:#06A7CB;margin-top: -20px;" >
    <div class="container-fluid">
        <div class="navbar-header">
            <div class="collapse navbar-collapse" id="navbar1">
                <ul class="nav navbar-nav">
                    <li class="navhover">
                        <a class="navbar-link" href="landing.php" style="color: white">HOME</a>
                    </li>
                    <li class="navHover">
                        <a href="registeruser.php" style="color:white;padding-left: 500px">REGISTER HERE!!</a>
                    </li>
                    <li>
                        <form method="post" action="registeruser.php">
                            <input type="submit" name="logout" value="LOGOUT" style="background-color: #06A7CB; color: white; border: none; padding-top: 15px; padding-left: 550px">
                        </form>
                </ul>
            </div>
        </div>
    </div>
</nav>

<br>
<br>
<br>

<div class=container>
    <div class="row" style="padding-left: 180px">
        <form method = "post" class="form-inline" action="registeruserbackend.php" >
            <div class="col-lg-5" style="padding-top: 15px" >
                <label>FIRST NAME &nbsp;</label>
                <input type="text" name="first_name" value="">
            </div>
            <div class="col-lg-5" style="padding-top: 15px">
                <label>LAST NAME &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input type="text" name="last_name" value="" >
            </div><br>
            <div class="col-sm-5" style="padding-top: 15px">
                <label>ADDRESS &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input type="text" name="address" value="">
            </div>
            <div class="col-sm-5" style="padding-top: 15px">
                <label>PHONE NUMBER &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input type="tel" name="phone_number" value="">
            </div><br>
            <div class="col-sm-5" style="padding-top: 15px">
                <label>ROLE &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input type="radio" name="role" value="Employee" checked> Employee<br>
                <input type="radio" name="role" value="Manager" style="margin-left: 90px"> Manager
            </div><br>
            <div class="col-sm-5"  style="padding-top: 15px">
                <label>STATUS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input type="radio" name="status" value="Currently Working" checked> Currently Working<br>
                <input type="radio" name="status" value="Finished" style="margin-left: 160px"> Finished
            </div><br>
            <div class="col-sm-5" style="padding-top: 15px">
                <label>START DATE &nbsp;</label>
                <input type="date" name="start_date" value="">
            </div><br><br>
            <div class="col-sm-5" style="padding-top: 15px">
                <label>END DATE &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input type="date" name="end_date" value="">
            </div><br><br>
            <div class="col-sm-5" style="padding-top: 15px">
                <label>EMAIL &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input type="email" name="email" value="">
            </div><br>
            <div class="col-sm-5" style="padding-top: 15px">
                <label>USERNAME&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input type="text" name="user_name" value="">
            </div><br>
            <div class="col-sm-5" style="padding-top: 15px">
                <label>PASSWORD &nbsp;&nbsp;</label>
                <input type="password" name="password" value="">
            </div><br>
            <div class="col-sm-5" style="padding-top: 15px">
                <label>CONFIRM PASSWORD &nbsp;</label>
                <input type="password" name="confirm_password" value="">
            </div><br><br>
            <div class="col-lg-10" style="padding-top: 50px; padding-left: 320px">
                <input type="submit" class="btn" name="reg_user" style="color: white; background-color: #06A7CB;">

                </input>
            </div><br>
        </form>
    </div>
</div>

</body>
</html>