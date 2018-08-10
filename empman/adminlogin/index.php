<?php
session_start();

if (!isset($_SESSION['user_name'])) {
    echo "done";
    $_SESSION['msg'] = "You must log in first";
    echo "done";
    header('Location: userlogin.php');
//    header('location: index.php');
}else{
    echo "Welcome ".$_SESSION['user_name'];
}

if (isset($_POST['logout'])) {
    unset($_SESSION['user_name']);
    session_unset();
    session_destroy();
    $_SESSION = [];
    header('location: login.php');
}

?>

<?php
include "../connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LOGIN HERE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
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
                        <a href="" style="color:white;">VIEW REPORT</a>
                    </li>
                    <li>
                        <form method="post" action="landing.php">
                            <input type="submit" name="logout" value="LOGOUT" style="background-color: #06A7CB; color: white; border: none; padding-top: 15px">
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>



<div class="status">
    <?php
    $query = "select user_name,status from tuples_db.employee";
    $result = mysqli_query($con,$query);
    ?>
    <?php
    if (mysqli_fetch_row($result)>0){
        while ($row = mysqli_fetch_assoc($result)){
            $username = $row['user_name'];
            $status = $row['status'];
            if ($username==$_SESSION['user_name']){
    echo '
    <h4 class="text" style="color: red; margin-left: 1150px">Status: '.$status . '</h4>';
            }
    }
    }
    ?>
</div>
<div class="panel panel-info" style="margin-left: 100px; margin-right: 1100px;" >
    <div class="panel-body">
        <?php
        $query = "select user_name,status from tuples_db.employee";
        $result = mysqli_query($con,$query);
        ?>
        <?php
        if (mysqli_fetch_row($result)>0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $username = $row['user_name'];
                $status = $row['status'];
                if ($username == $_SESSION['user_name']) {
                    echo '<h4 class="text-center" style="font-size: small; color: red"> Hello ' . $username . '</h4>';
                }
            }
        }
        ?>
</div>
    <div class="panel-heading text-center" style="margin-bottom: 10px; height: 50px">
        <form method="post" action="inout.php">
            <input type="submit" class="btn btn-outline-success custom-control-input " style="background-color:#d9edf7; font-size: large" name="in" value="PUNCH IN">
        </form></div>
</div>
</body>
</html>
