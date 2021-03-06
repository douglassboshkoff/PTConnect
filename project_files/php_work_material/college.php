<?php
session_start();
if(isset($_SESSION['id']))
{
    $_SESSION['id'] = $_SESSION['id'];
}
include("../model/database.php");
include("../model/queries_db.php");
include("../model/questions_db.php");
include("../model/university_db.php");

$collegeID = "";
if(isset($_POST["college_ID"])){

    $collegeID = $_POST["college_ID"];
}else if(isset($_POST['university_id'])){
    $collegeID = $_POST['university_id'];
}
if($collegeID != ""){
    $_SESSION['current_id'] = $collegeID;
}
else if(isset($_SESSION['current_id'])){
    $collegeID = $_SESSION['current_id'];
}
else{
    $collegeID = 1;
}
//echo $collegeID;
$arr = get_queries();

$arr_queries = array();

for($i = 0; $i < count($arr); $i++){
    $arr_queries[$i] = $arr[$i];

}

/** Manages what question page the page is on (cycles through them using the q_next and q_prev divs */
if(isset($_GET['pageNum'])){
    $pageNum = $_GET['pageNum'];
}else{
    $pageNum = 0;
}
if(isset($_GET['next'])){
    if($_GET['next'] == 1){
        $pageNum++;
        if($pageNum > (count($arr)-1)){
            $pageNum = 0;
        }
    }else if($_GET['next'] == -1){
        $pageNum--;
        if($pageNum < 0){
            $pageNum = count($arr)-1;
        }
    }
}
$comment_arr = get_questions($collegeID, $pageNum);
if(isset($_GET['userID'])){
    $userID = $_GET['userID'];
    $user_comment = get_question($_GET['userID'], $collegeID, $pageNum);
}
/**
 * Created by JetBrains PhpStorm.
 * User: Danny
 * Date: 5/22/14
 * Time: 1:32 PM
 * To change this template use File | Settings | File Templates.
 */
?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="stylesheet.css" />
</head>
<body>
<div id="wrapper1">
    <div id='wrapper2'>
        <div id="name">
            <h1><?php echo get_college_name($collegeID)->fetch()['name'] . " - " . get_college_name($collegeID)->fetch()['location']; ?> </h1>
        </div>
        <div id="logo">
            <img src="<?php echo get_college_image($collegeID); ?>" />
        </div>
        <div id="alumni">
            <h1>Alumni</h1>
            <p> Total Students Who Have Attended: <?php echo count(get_students($collegeID)); ?></p>
        </div>
        <div id="questions">
            <a href = "college.php?next=-1&pageNum=<?php echo $pageNum; ?><?php if(isset($userID)){ echo "&userID=" . $userID;}?>">
            <button id="prev">Previous</button>
                </a>
            <a href = "college.php?next=1&pageNum=<?php echo $pageNum; ?><?php if(isset($userID)){ echo "&userID=" . $userID;}?>">

            <button id="next">Next</button>
                </a>
            <h1> <?php echo $arr[$pageNum]['question']; ?></h1>
            <?php if(isset($user_comment)){ ?>
            <img src="profile.png"/><p style= "background-color: lightgrey;"><?php echo $user_comment; ?></p>
            <?php } ?>

            <?php foreach($comment_arr as $comment){ ?>
                <?php if($comment['response'] != $user_comment) { ?>
                <img src="profile.png"/><p><?php echo $comment['response']; ?></p>
            <?php }} ?>
        </div>
    </div>
</div>
</body>
</html>
