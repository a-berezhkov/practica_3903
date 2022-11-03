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
<div class="login-container">
    <h1 class="login-heading">
        Registration
    </h1>
    <form action="registration.php" method="post" class="registration-form">
        <div class="input-container">
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
            <label class="forename-box" for="forenameBox">
                Forename
                <input type="text" name="forename" id="forenameBox" placeholder="Type your forename...">
            </label>
            <label class="surename-box" for="surenameBox">
                Surename
                <input type="text" name="surename" id="surenameBox" placeholder="Type your surename...">
            </label>
        </div>
        <button class="styled-btn login" type="submit">
            Register
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 12C20 11.7348 19.8946 11.4804 19.7071 11.2929C19.5196 11.1054 19.2652 11 19 11H11.41L13.71 8.71C13.8032 8.61676 13.8772 8.50607 13.9277 8.38425C13.9781 8.26243 14.0041 8.13186 14.0041 8C14.0041 7.86814 13.9781 7.73757 13.9277 7.61575C13.8772 7.49393 13.8032 7.38324 13.71 7.29C13.6168 7.19676 13.5061 7.1228 13.3842 7.07234C13.2624 7.02188 13.1319 6.99591 13 6.99591C12.8681 6.99591 12.7376 7.02188 12.6158 7.07234C12.4939 7.1228 12.3832 7.19676 12.29 7.29L8.29 11.29C8.19896 11.3851 8.12759 11.4972 8.08 11.62C7.97998 11.8635 7.97998 12.1365 8.08 12.38C8.12759 12.5028 8.19896 12.6149 8.29 12.71L12.29 16.71C12.383 16.8037 12.4936 16.8781 12.6154 16.9289C12.7373 16.9797 12.868 17.0058 13 17.0058C13.132 17.0058 13.2627 16.9797 13.3846 16.9289C13.5064 16.8781 13.617 16.8037 13.71 16.71C13.8037 16.617 13.8781 16.5064 13.9289 16.3846C13.9797 16.2627 14.0058 16.132 14.0058 16C14.0058 15.868 13.9797 15.7373 13.9289 15.6154C13.8781 15.4936 13.8037 15.383 13.71 15.29L11.41 13H19C19.2652 13 19.5196 12.8946 19.7071 12.7071C19.8946 12.5196 20 12.2652 20 12ZM17 2H7C6.20435 2 5.44129 2.31607 4.87868 2.87868C4.31607 3.44129 4 4.20435 4 5V19C4 19.7956 4.31607 20.5587 4.87868 21.1213C5.44129 21.6839 6.20435 22 7 22H17C17.7956 22 18.5587 21.6839 19.1213 21.1213C19.6839 20.5587 20 19.7956 20 19V16C20 15.7348 19.8946 15.4804 19.7071 15.2929C19.5196 15.1054 19.2652 15 19 15C18.7348 15 18.4804 15.1054 18.2929 15.2929C18.1054 15.4804 18 15.7348 18 16V19C18 19.2652 17.8946 19.5196 17.7071 19.7071C17.5196 19.8946 17.2652 20 17 20H7C6.73478 20 6.48043 19.8946 6.29289 19.7071C6.10536 19.5196 6 19.2652 6 19V5C6 4.73478 6.10536 4.48043 6.29289 4.29289C6.48043 4.10536 6.73478 4 7 4H17C17.2652 4 17.5196 4.10536 17.7071 4.29289C17.8946 4.48043 18 4.73478 18 5V8C18 8.26522 18.1054 8.51957 18.2929 8.70711C18.4804 8.89464 18.7348 9 19 9C19.2652 9 19.5196 8.89464 19.7071 8.70711C19.8946 8.51957 20 8.26522 20 8V5C20 4.20435 19.6839 3.44129 19.1213 2.87868C18.5587 2.31607 17.7956 2 17 2Z" fill="black"/>
            </svg>
        </button>
    </form>
</div>
</body>
</html>