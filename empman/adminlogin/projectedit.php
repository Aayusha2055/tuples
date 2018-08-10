<?php
session_start();

if (!isset($_SESSION['username'])) {
    echo "done";
    $_SESSION['msg'] = "You must log in first";
    echo "done";
    header('Location: login.php');

}else{
    echo "Welcome ".$_SESSION['username'];
}

if (isset($_POST['logout'])) {
    unset($_SESSION['username']);
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
    <title>PROJECT EDIT</title>
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
                        <a href="registeruser.php" style="color:white;"> ADD NEW USER</a>
                    </li>
                    <li class="navHover">
                        <a href="addproduct.php" style="color: white"> ADD NEW PRODUCT</a>
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


<?php
//$id = $_SESSION['count'];
//?>
<?php
//$query = "select project_name from add_project where ID=$id";
//$result = mysqli_query($con,$query);
//?>
<!---->
<?php
//if (mysqli_fetch_row($result)>0) {
//    while ($row = mysqli_fetch_assoc($result)) {
//       $pname_value = $row['project_name'];
//
//       echo '
//       <h4 class="text" style="color: red">'.$pname_value . '</h4>
//       ';
//
//    }
//}
//?>

<?php
$id = $_SESSION['count'];
$ID = $_POST['ID'];
$query = "select project_name from add_project where ID";
$result = mysqli_query($con,$query);


if (mysqli_fetch_assoc($result)>=1){
    echo "hi";
       while ($row1 = mysqli_fetch_array($result)){
           echo "hello";
       $pname_value = $row1['project_name'];

        echo '
        <h4 class="text" style="color: red">'.$pname_value.'</h4>
        ';
    }
}

?>

</body>
</html>

