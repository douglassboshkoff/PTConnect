
<html>
<head>
    <link rel="stylesheet" type="text/css" href="stylesheet.css" />
</head>
<body>
<div id='navTop'>
    <ul>
        <li><span id="white">PT</span><span id="red">Connect</span></li>
        <?php if(isset($_SESSION['id'])) { ?>

        <img src="profile2.png" />
        <a href="index.php">Logout</a>
        <?php } ?>
    </ul>

</div>
<div id='tabs'>

    <ul>
        <li class='active'><a href='main.php'><span>Home</span></a></li>
     <?php if(isset($_SESSION['id'])) { ?>
        <li><?php echo "wtf";?></li>
        <li><a href='myCollege.php'><span>My College</span></a></li>
        <li><a href='myExperiences.php'><span>My Experiences</span></a></li>
        <li class='last'><a href='myProfile.php'><span>My Profile</span></a></li>
    </ul>
    <?php } ?>
</div>
</body>
</html>
