<?php
include("../model/database.php");
include("../model/university_db.php");
include("../model/accounts_db.php");
include("../model/experiences_db.php");

$cur_pic = "../test_material/bullets_picture/Bullet_Arrow_R.png";
//gets userID from alum filter
$userID = 1;
if (isset($_POST['name'])) {
    $userID = get_id_by_email($_POST['name'])['id'];
}
$g_colleges = get_college($userID);

$arr_exp = array();

$arr_exp[0] = "test";
$arr_exp[1] = "test1";
$arr_exp[2] = "test2";
$arr_exp[3] = "test3";
$arr_exp[4] = "test4";

$arr_exp = get_experiences($userID)->fetchAll() ;
?>
<!DOCTYPE html>
<html>
<?php include "header.php"?>
<head>
    <link rel="stylesheet" type="text/css" href="stylesheet.css"/>
    <script type="text/javascript" src="../js/jQuery.js"></script>
    <script type="text/javascript" src="../js/bulletslide.js"></script>
</head>

<body>
<div id="profile">
    <div id="profilePicture">
        <img src="<?php echo get_image($userID)['image_link']; ?>"/>
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
                <li><a href = "college.php?university_id=<?php echo $g_college['university_id'] ?>&userID=<?php echo $userID ?>"> <?php echo get_college_name($g_college['university_id'])->fetch()['name']; ?> </a></li>
            <?php } ?>
        </ul>
    </div>
    <div id="experiences">
        <h1>Experiences</h1>
        <ul>
            <?php for($i = 0; $i < count($arr_exp); $i++):?>
                <li>
                    <div class = "expdiv"> <?php echo $arr_exp[$i]['title']; ?>  </div> <span class = "expander"> <img class = "exp_img" src =  "../test_material/bullets_picture/Bullet_Arrow_R.png";
                </span>
                    <div class="expand" style="display: none;"><?php echo $arr_exp[$i]['content']; ?></div>
                </li>
            <?php endfor; ?>
        </ul>
    </div>
</div>
</body>
<?php include "footer.php" ?>
</html>
