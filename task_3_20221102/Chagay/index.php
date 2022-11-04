<?php
namespace Chagay;
//
use Models\BlogDB;

spl_autoload_register(/**
 * @param $class_name
 */ function ($class_name) {
    include $class_name . '.php';
});

session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: loginPage.php');
}

$db = new BlogDB();
$posts = $db->fetchAll("posts");


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Главная страница</title>
</head>
<body>

<header>
    <p class="header-heading"><?=$_SESSION['user_name']?></p>
    <div class="header-btn">
        <button class="styled-btn-profile" id="showEditProfileBtn">
            Edit Profile
    </div>
    <form class="add-post-form edit-profile-form" id="editProfileForm" action="editUser.php" method="post">
        <label for="postTitle">
            New forename
            <input class="post-title-box" type="text" name="newFirstName" id="newFirstName" placeholder="Type new forename...">
        </label>
        <label for="postText">
            New surename
            <input class="post-text-box" type="text" name="newSecondName" id="newSecondName" placeholder="Type new surename...">
        </label>
        <label for="postText">
            New E-Mail
            <input class="post-text-box" type="text" name="newMail" id="newMail" placeholder="Type new e-mail...">
        </label>
        <button class="styled-btn-post" type="submit">
            Change
        </button>
    </form>
</header>
<form class="add-post-form" id="addPostForm" action="shitpost.php" method="post">
    <label for="Title">
        Title
        <input class="post-title-box" type="text" name="Title" id="Title" placeholder="Type title...">
    </label>
    <label for="postText">
        Post text
        <textarea class="post-text-box" name="Text" id="Text" placeholder="Type some text..."></textarea>
    </label>
    <label for="postDate">
        Post date
        <input class="post-text-box" type="date" name="Date" id="Date" placeholder="Pick date...">
    </label>
    <button class="styled-btn" type="submit">
        click to shitpost
    </button>
</form>
<section class="posts-section">
    <h1>
        Blog
    </h1>
    <button class="styled-btn-post">
        Add New
    </button>
    <div class="posts-container-fomin">
        <?php
        foreach ($posts as $post){?>
        <div class="post-chagai>
        <p class="post-title-chagai"><?=$post[1]?></p>
        <p class="post-text-chagai"><?=$post[2]?></p>
        <div class="post-author-container">
            <p class="post-author"><?=$post[4]?></p>
            <p class="post-date-chagai"><?=$post[3]?></p>
        </div>
    </div>
    <?php }?>
</section>






</body>
</html>