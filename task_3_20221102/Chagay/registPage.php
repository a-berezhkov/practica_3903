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
    <title>Registration</title>
</head>
<body>
<div class="login-cont">
    <h1 class="login-head">
        Registration
    </h1>
    <form class="styled-form-reg" action="regist.php" method="post">
        <div class="input-cont">
            <label for="loginBar">
                Username
                <input class="username-box" type="text" name="username" id="usernameBox" placeholder="Type your username...">
            </label>
            <label for="passwordBox">
                Password
                <input class="password-box" type="password" name="password" id="passwordBox" placeholder="Type your password...">
            </label>
            <label for="securityCheckBox">
                Confirm password
                <input class="password-box" type="password" name="confirm-pass" id="securityCheckBox" placeholder="Type your password...">
            </label>
            <label for="emailBox">
                E-Mail
                <input class="email-box" type="text" name="email" id="emailBox" placeholder="Type your E-Mail...">
            </label>
            <label class="firstName-box" for="firstNameBox">
                Name
                <input type="text" name="firstName" id="firstNameBox" placeholder="Type your name...">
            </label>
            <label class="secondName-box" for="secondNameBox">
                Surename
                <input type="text" name="secondName" id="secondNameBox" placeholder="Type your surename...">
            </label>
        </div>
        <button class="styled-btn-reg" type="submit">
            Register
        </button>
    </form>
</div>
</body>
</html>
