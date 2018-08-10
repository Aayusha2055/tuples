<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LOGIN AS USER</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <link href="logincss.css" rel="stylesheet">
</head>
<body>


<nav class="navbar navbar-default">
    <div class="container-fluid" style="margin-bottom: -25px">
        <div class="navbar navbar-expand-sm bg-light navbar-dark">
            <a class="navbar-brand" href="userlogin.php"></a>
            <img src="../Logo4T.png" alt="Logo" style="width:150px;">
        </div>
    </div>
</nav>

<nav class="nav-justified" style="background-color: #06A7CB; margin-top: -20px; ">
    <header class="text">LOGIN IF YOU HAVE ACCESS!!</header>
</nav>
<br>

<div class="text-center" style="margin-top: 20px">
    <header>Sign in to continue to Employee Manager</header>
    <br>
    <form method="post" action="registeruserbackend.php">
        <div class="form-group ">

            <label>Username</label>
            <input type="text" name="user_name" placeholder="username" required>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" placeholder="Password" required><br>
        </div>
        <div class="input_data">
            <input type="submit" class="btn" name="login_user" value="SIGN IN"
                   style="background-color: #06A7CB; color: white"/>
        </div>
</div>

</body>
</html>