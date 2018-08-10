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
    <title> ADD PROJECT</title>
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
                        <a href="addproduct.php" style="color:white;padding-left: 500px">ADD PRODUCT</a>
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

<div class=container>
    <div class="row" style="padding-left: 180px">
        <form method = "post" class="form-inline" action="addprojectbackend.php" >
            <div class="col-lg-5" style="padding-top: 15px" >
                <label>PROJECT NAME &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  </label>
                <input type="text" name="project_name" value="">
            </div>
            <div class="col-sm-5" style="padding-top: 15px">
                <label>PROJECT TYPE</label>&nbsp;&nbsp;&nbsp;
                <input type="radio" name="project_type" value="Product" checked> Product
                <input type="radio" name="project_type" value="Service"> Service
            </div><br>
            <div class="col-sm-5" style="padding-top: 15px">
                <label>CLIENT NAME &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input type="text" name="client_name" value="">
            </div>
            <div class="col-sm-5" style="padding-bottom:5px;">
                <label>PROJECT MANAGER&nbsp;&nbsp;</label>
                <input type="text" name="project_manager" value="">
            </div><br>
            <div class="col-sm-5" style="padding-top: 15px">
                <label>BUDGET&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;</label>
                <input type="number" name="budget" value="">
            </div><br>
            <div class="col-sm-5"  style="padding-top: 15px">
                <label>STATUS</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" name="status" value="Ongoing" checked> Ongoing &nbsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" name="status" value="Onhold"> On Hold
                <input type="radio" name="status" value="Completed"> Completed
            </div><br>
            <div class="col-sm-5" style="padding-top: 15px">
                <label>DEADLINE &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input type="date" name="deadline" value="">
            </div><br><br>
            <div class="col-sm-5" style="padding-top: 15px">
                <label>START DATE &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input type="date" name="start_date" value="">
            </div><br><br>
            <div class="col-sm-5" style="padding-top: 15px">
                <label>END DATE &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input type="date" name="end_date" value="">
            </div><br><br>
            <div class="col-sm-5" style="padding-top: 15px">
                <label>GITHUB LINK &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input type="url" name="git_link" value="">
            </div><br>
            <div class="col-sm-5" style="padding-top: 15px">
                <label>REMARKS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <textarea class="form-control" rows="2" name="remarks"></textarea>
            </div><br>
            <div class="col-lg-10" style="padding-top: 50px; padding-left: 320px">
                <input type="submit" class="btn" name="add" style="color: white; background-color: #06A7CB;"></input>
            </div><br>
        </form>
    </div>
</div>
<!---->
<!---->
<!--<form method = "post" action="addprojectbackend.php" >-->
<!--    <div class="input_data">-->
<!--        <label>Project Name</label>-->
<!--        <input type="text" name="project_name" value="">-->
<!--    </div><br>-->
<!---->
<!--    <div class="input_data">-->
<!--        <label>Project Type</label>-->
<!--        <input type="radio" name="project_type" value="Product" checked> Product-->
<!--        <input type="radio" name="project_type" value="Service"> Service-->
<!--    </div><br>-->
<!---->
<!--    <div class="input_data">-->
<!--        <label>Client Name</label>-->
<!--        <input type="text" name="client_name" value="">-->
<!--    </div><br>-->
<!---->
<!--    <div class="input_data">-->
<!--        <label>Project Manager</label>-->
<!--        <input type="name" name="project_manager" value="">-->
<!--    </div><br>-->
<!---->
<!--    <div class="input_data">-->
<!--        <label>Budget</label>-->
<!--        <input type="number" name="budget" value="">-->
<!--    </div><br>-->
<!---->
<!--       <div class="input_data">-->
<!--        <label>Status</label><br>-->
<!--        <input type="radio" name="status" value="Ongoing" checked> Ongoing<br>-->
<!--        <input type="radio" name="status" value="Completed"> Completed<br>-->
<!--        <input type="radio" name="status" value="On Hold"> On Hold-->
<!--    </div><br>-->
<!---->
<!--    <div class="input_data">-->
<!--        <label>Deadline</label>-->
<!--        <input type="date" name="deadline" value="">-->
<!--    </div><br>-->
<!---->
<!--    <div class="input_data">-->
<!--        <label>Start Date</label>-->
<!--        <input type="date" name="start_date" value="">-->
<!--    </div><br>-->
<!---->
<!--    <div class="input_data">-->
<!--        <label>End Date</label>-->
<!--        <input type="date" name="end_date" value="">-->
<!--    </div><br>-->
<!---->
<!--    <div class="input_data">-->
<!--        <label>Github link</label>-->
<!--        <input type="url" name="git_link" value="">-->
<!--    </div><br>-->
<!---->
<!--    <div class="input_data">-->
<!--        <label>Remarks</label>-->
<!--        <textarea class="form-control" rows="2" name="remarks"></textarea>-->
<!--    </div><br>-->
<!---->
<!--    <div class="input_data">-->
<!--        <button type="submit" class="btn" name="add">DONE</button>-->
<!--    </div>-->
<!---->
<!---->
<!--</form>-->
</body>
</html>