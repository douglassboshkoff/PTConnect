<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="stylesheet.css" />
    <style>
        #navTop li a{
            display: block;
            float: left;
            font-size: 32px;

            text-decoration: none;
        }
    </style>
</head>
<body>
<div id='navTop'>
    <ul>

        <?php if(isset($_SESSION['id'])) { ?>
        <li><span id="white">PT</span><span id="red">Connect</span></li>
        <img src="profile2.png" />
        <a href="index.php">Logout</a>
        <?php }else { ?>
        <li><a href="main.php" style="text-decoration: none; font-size:32px; "><span id="white">PT</span><span id="red">Connect</span></a></li>
        <a href="index.php">Login Page</a>
            <?php } ?>
    </ul>

</div>
<div id='tabs'>

    <ul>
        <?php if(isset($_SESSION['id'])) { ?>
        <li class='active'><a href='main.php'><span>Home</span></a></li>
        <li><a href='myCollege.php'><span>My College</span></a></li>
        <li><a href='myExperiences.php'><span>My Experiences</span></a></li>
        <li class='last'><a href='myProfile.php'><span>My Profile</span></a></li>
    </ul>
    <?php } ?>
</div>
</body>
</html>
