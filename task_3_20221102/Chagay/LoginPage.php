<?php
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Log In</title>
</head>
<body>
<div class="login-container">
    <h1 class="login-heading">
        Log In
    </h1>
    <form class="login-form" action="author.php" method="post">
        <label for="loginBar">
            Username
            <input class="nameBox" type="text" name="username" id="nameBox" placeholder="Type your username...">
        </label>
        <label for="passwordBox">
            Password
            <input class="password-box" type="password" name="password" id="passwordBox" placeholder="Type your password...">
        </label>
        <button class="styled-btn-login" type="submit">
            Log In
        </button>
    </form>
</div>
</body>
</html>