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
    <title>LANDING</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>


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

<div class="header1">
    <h4 class="text-center" style="color: red">PROJECTS</h4>
</div>
<?php
$query = "select ID,project_name, client_name from add_project";
$result = mysqli_query($con,$query);
?>

<?php
if (mysqli_fetch_row($result)>0){
    while ($row = mysqli_fetch_assoc($result)){
        $count = $row['ID'];
        $_SESSION['count']=$count;
        $pname_value = $row['project_name'];
        $cname_value = $row['client_name'];

echo'
       
      <button type="button" class="btn btn-outline-primary" id='.$count.' onclick="relocate_home()" style="border-color:#06A7CB; margin-left: 80px">   
        <h4 class="text" style="color: red">'.$pname_value . '</h4>
        <h5 class="text" style="color: red">'.$cname_value.'</h5>
      </button>

';
}
}
?>
    <script>
        function relocate_home()
        {
            location.href = "http://localhost/PhpstormProjects/empman/adminlogin/projectedit.php";
        }
    </script>


</body>
</html>
