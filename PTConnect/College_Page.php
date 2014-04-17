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
        #main{
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
    </style>
</head>
<body>
<div id = "main">
    <a href = "Questions_test.php?next=-1&pageNum=<?php echo $pageNum ?>">
        <div class = "nav" id = "prev_q">
            <img class = "arrows" src = "            http://upload.wikimedia.org/wikipedia/commons/1/18/Left_arrow.svg
" width = "70em"/>
        </div>
    </a>
    <div id = "question_display">
        <?php echo $arr[$pageNum]; ?>
    </div>
    <a href = "Questions_test.php?next=1&pageNum=<?php echo $pageNum ?>">
        <div class = "nav" id = "next_q">
            <img class = "arrows" src = "http://upload.wikimedia.org/wikipedia/commons/1/12/Right_arrow.svg" width = "70em"/>

        </div>
    </a>
    <br/>
    <div id = "post_bar">

    </div>
</div>
</body>
</html>