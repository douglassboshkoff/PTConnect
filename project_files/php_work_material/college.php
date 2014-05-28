<?php
include("../model/database.php");
include("../model/queries_db.php");
include("../model/questions_db.php");
include("../model/university_db.php");

$collegeID = "";
if(isset($_POST["college_ID"])){

    $collegeID = $_POST["college_ID"];
}else if(isset($_GET['university_id'])){
    $collegeID = $_GET['university_id'];
}else{
    $collegeID = 1;
}

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
            <img src="purdue.png" />
        </div>
        <div id="alumni">
            <h1>Alumni</h1>
            <p><?php  ?> alumni graduated from this college</p>
            <p>5 alumni attend this college</p>
        </div>
        <div id="questions">
            <a href = "college.php?next=-1&pageNum=<?php echo $pageNum ?>">
            <button id="prev">Previous</button>
                </a>
            <a href = "college.php?next=1&pageNum=<?php echo $pageNum ?>">

            <button id="next">Next</button>
                </a>
            <h1> <?php echo $arr[$pageNum]['question']; ?></h1>

            <?php foreach($comment_arr as $comment){ ?>
            <img src="profile.png"/><p><?php echo $comment['response']; ?></p>
            <?php } ?>
        </div>
    </div>
</div>
</body>
</html>
