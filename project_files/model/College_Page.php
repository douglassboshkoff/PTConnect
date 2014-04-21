<?php

$comment_arr = array();

/** Will correspond with the questions held in $arr (if page is on question 2, these will be question 2 comments */
$comment_arr[0] = "Comment 1";
$comment_arr[1] = "Comment 2";
$comment_arr[2] = "Comment 3";
$comment_arr[3] = "Comment 4";
$comment_arr[4] = "Comment 5";
$comment_arr[5] = "Comment 6";


/** $arr holds the values of the questions, $pageNum/$_GET[pageNum] will determine which question is used */
$arr = array();
$arr[0] = "test";
$arr[1] = "test1";
$arr[2] = "test2";
$arr[3] = "test3";
$arr[4] = "test4";

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
?>
<html>
<head>
    <title> WEBPAGE </title>
    <style>
        /** Generic Div **/
        div{
            height: 5em;
            width: 5em;
            border: 1px black solid;
            display: inline-block;
        }
        /** Div within the main div containing the comments div and questions div**/
        #post_bar{

            width: 30em;
            height: 18em;
            //height: <?php echo (count($comment_arr) * 6); ?>em;
            padding-bottom: 1em;
            overflow: auto;
        }
        /** Div used to go to previous question (Contains left arrow image)**/
        #prev_q{
            float:left;
            margin-left: 2.5em;

        }
        /** Holds the question **/
        #question_display{
            width: 19em;
            margin-left: .3em;
        }
        /** Div used to go to next question (Contains right arrow image) **/
        #next_q{
            margin-right: 2.5em;
            float:right;
        }
        /** Div containing the top half of the page (User Bio, Image) (not the name of college)**/
        #main1{
            margin: auto;
            padding-top: 1em;
            width: 35em;
            height: 15em;
            text-align: center;
        }
        /** Contains bottom half of page (comments area/questions)**/
        #main2{
            margin: auto;
            padding-top: 1em;
            width: 35em;
            height: 25em;
            text-align: center;
            //height: <?php echo (count($comment_arr) * 7); ?>em;
            //overflow: auto;

        }
        body{
            text-align: center;
        }
        /** Arrow Images **/
        .arrows{
            margin-left: .2em;
            margin-top: .6em;
        }
        /** Pic of the college**/
        #coll_pic{
            float: left;
            height: 80%;
            width: 35%;
            margin-left: 1.5em;

        }
        #college_bio{
            float:right;
            width: 55%;
            height: 80%;
            margin-right: 1.5em;
        }
        #college_name{
            margin: auto;
            padding-top: 1em;
            width: 35em;
            height: 2em;
            text-align: center;
        }
        /** Code From Danny **/
        /** Direct div containing comments **/
        #clip {
            margin-top: 1em;
            height: 100%;
            width: 90%;
            border: none;
            //overflow: auto;
        }
        /** Listing the comments code**/
        ul{
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
        li{
            background: url("../resources/BlankFace.jpg") no-repeat left top;
            width: 4em;
            height: 4em;
            padding-left: 5em;
            padding-top: 1em;

        }

        ul{

        }
    </style>
    <script>
        var cssStyle = getCSSRule('#styleName');
        cssStyle.style.background = redfinedColour;
    </script>
</head>
<body>
<div id = "college_name">
    PURDUE UNIVERSITY
</div>
<br/>
<div id = "main1">
    <div id = "coll_pic">
        <img src = "#" />
    </div>
    <div id = "college_bio">
        <p> This is the College Bio.</p>
    </div>
</div>
<br/>
<div id = "main2">
    <a href = "College_Page.php?next=-1&pageNum=<?php echo $pageNum ?>">
        <div class = "nav" id = "prev_q">
            <img class = "arrows" src = "            http://upload.wikimedia.org/wikipedia/commons/1/18/Left_arrow.svg
" width = "70em"/>
        </div>
    </a>
    <div id = "question_display">
        <?php echo $arr[$pageNum]; ?>
    </div>
    <a href = "College_Page.php?next=1&pageNum=<?php echo $pageNum ?>">
        <div class = "nav" id = "next_q">
            <img class = "arrows" src = "http://upload.wikimedia.org/wikipedia/commons/1/12/Right_arrow.svg" width = "70em"/>

        </div>
    </a>
    <br/>
    <div id = "post_bar">
        <div id="clip">
            <ul id="bullets">
                <li id="active"><a href="#" id="current">Item one</a></li>
                <?php for($i = 0; $i < count($comment_arr); $i++){?>
                    <li><a href="#"><?php echo $comment_arr[$i];?> </a></li>

                <?php } ?>
            </ul>
        </div>
    </div>
</div>
</body>
</html>