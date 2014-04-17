<?php

$arr = array();
$arr[0] = "test";
$arr[1] = "test1";
$arr[2] = "test2";
$arr[3] = "test3";
$arr[4] = "test4";

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

        div{
            height: 5em;
            width: 5em;
            border: 1px black solid;
            display: inline-block;
        }
        #post_bar{
            width: 30em;
            height: 18em;
        }
        #prev_q{
            float:left;
            margin-left: 2.5em;

        }
        #question_display{
            width: 19em;
            margin-left: .3em;
        }
        #next_q{
            margin-right: 2.5em;
            float:right;
        }
        #main1{
            margin: auto;
            padding-top: 1em;
            width: 35em;
            height: 15em;
            text-align: center;
        }
        #main2{
            margin: auto;
            padding-top: 1em;
            width: 35em;
            height: 25em;
            text-align: center;
        }
        body{
            text-align: center;
        }
        .arrows{
            margin-left: .2em;
            margin-top: .6em;
        }
        #user_pic{
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
        #clip {
            list-style-type: lower-greek;
            margin-top: 1em;
            height: 80%;
            width: 90%;
        }

        ul{
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
        li{
            background: url("http://upload.wikimedia.org/wikipedia/commons/1/12/Right_arrow.svg") no-repeat left top;
            height: 64px;
            padding-left: 64px;

        }

        ul{
            list-style-type: lower-greek;
        }
    </style>
</head>
<body>
<div id = "college_name">
    PURDUE UNIVERSITY
</div>
<br/>
<div id = "main1">
    <div id = "user_pic">
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
                <li><a href="#">Item two </br> heheh</a></li>
                <li><a href="#">Item three</a></li>
                <li><a href="#">Item four</a></li>
                <li><a href="#">Item five</a></li>
            </ul>
        </div>
    </div>
</div>
</body>
</html>