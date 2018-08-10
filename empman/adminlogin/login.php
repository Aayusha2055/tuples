<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LOGIN HERE</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <link href="logincss.css" rel="stylesheet">
</head>
<body>


<nav class="navbar navbar-default">
    <div class="container-fluid" style="margin-bottom: -25px">
        <div class="navbar navbar-expand-sm bg-light navbar-dark">
            <a class="navbar-brand" href="login.php"></a>
            <img src="../Logo4T.png" alt="Logo" style="width:150px;">
        </div>
    </div>
</nav>

<nav class="nav-justified" style="background-color: #06A7CB; margin-top: -20px; ">
    <header class="text">LOGIN IF YOU HAVE ACCESS!!</header>
</nav>


<br><br><br>

<span class="border-0">

<div class="text-center" style="margin-top: 20px">
    <header>Sign in to continue to Employee Manager</header>
    <img src="../Logo4T.png" alt="Logo" style="width:150px;"><br>

    <form method="post" action="adminloginbackend.php">
        <div class="form-group ">

            <label>Username</label>
            <input type="text" name="username" placeholder="Username" >
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" placeholder="Password" ><br>
        </div>
        <div class="form-group form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Remember me
            </label>
        </div>
        <div class="input_data">
            <input type="submit" class="btn " name="submit" value="SIGN IN" style="background-color: #06A7CB; color: white; margin-top:-20px ">
        </div>
    </form>

        <div class="input_data">
            <a href="userlogin.php" style="color: #06A7CB">LOGIN AS USER</a>
        </div>
    <div class="footer" style="color:red; padding-top: 200px">
        <p>Copyright four tuples solutions pvt.ltd</p>
    </div>
</span>

</body>
</html>