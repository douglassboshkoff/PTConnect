<?php
include("../model/database.php");
include("../model/university_db.php");
include("../model/accounts_db.php");

$cur_pic = "../test_material/bullets_picture/Bullet_Arrow_R.png";
//gets userID from alum filter
$userID = 1;
if (isset($_POST["userID"])) {
    $userID = $_POST["userID"];
}
$g_colleges = get_college($userID);

?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="stylesheet.css"/>
</head>
<body>
<div id="profile">
    <div id="profilePicture">
        <img src="profile.png"/>
    </div>
    <div id="profileInfo">
        <h1><?php $name = get_name($userID); echo $name['first_name'] . " " . $name['last_name'];?></h1>

        <p>PT <?php echo $name['pt_grad_year']; ?> </p>

        <p><?php echo $name['email']; ?></p>
    </div>
    <div id="bio">
        <h1>Bio</h1>

        <p><?php echo $name['bio']; ?> </p>
    </div>
    <div id="colleges">
        <h1>Colleges</h1>
        <ul>
            <?php foreach($g_colleges as $g_college){ ?>
                <li><a href = "college.php?university_id=<?php echo $g_college['university_id'] ?>"> <?php echo get_college_name($g_college['university_id'])->fetch()['name']; ?> </a></li>
            <?php } ?>
        </ul>
    </div>
    <div id="experiences">
        <h1>Experiences</h1>
        <ul>
            <li>RIS (Summer Camp) <a>>></a></li>
            <li>Google, Inc. (Internship) <a>>></a></li>
            <li>Miami of Ohio (CS Competition) <a>>></a></li>
        </ul>
    </div>
</div>
</body>
</html>
