<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LOGIN HERE</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</head>
<body>


<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar navbar-expand-sm bg-light navbar-dark">
            <a class="navbar-brand" href="login.php"></a>
            <img src="../Logo4T.png" alt="Logo" style="width:150px;">
        </div>
    </div>
</nav>

<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
    <header class="text-center">LOGIN IF YOU HAVE ACCESS</header>
</nav>

<br>
<div class="text-center">
    <header>Sign in to continue to Employee Manager</header>
    <img src="../Logo4T.png" alt="Logo" style="width:150px;"><br>

    <form method="post" action="adminloginbackend.php">
        <div class="form-group ">

            <label>Username</label>
            <input type="text" name="Username" placeholder="Username" required>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="Password1" placeholder="Password" required><br>
        </div>
        <div class="form-group form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Remember me
            </label>
        </div>
        <div class="input_data">
            <button type="submit" class="btn btn-primary btn-lg" role="button" name="login_admin">SIGN IN</button>
        </div>

        <div class="input_data">
            <a href="login.php">LOGIN AS USER</a>
        </div>


</body>
</html>