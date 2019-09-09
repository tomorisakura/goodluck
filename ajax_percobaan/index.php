<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./style/login.css">
    <title>Login</title>
</head>
<body>
    <div class="fill">
    <div class="tengah">
    <form class="form" action="proses.php" method="POST">
        <img src="img/profil_logo_white.png" alt="">
        <p>Username</p>
        <input type="text" name="user" required class="loglog">
        <p>Password</p>
        <input type="password" name="pass" required class="loglog">
        <br>
        <input id="login_btn" type="submit" value="Login">
    </form>
    </div>
    </div>
    <script src="java.js"></script>
</body>
</html>