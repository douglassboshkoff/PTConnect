<?php

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
        li{
            background: url("BlankFace.jpg") no-repeat left top;
            height: 64px;
            padding-left: 64px;
        }

        ul{
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
    </style>
</head>
<body>
<div id = "main">
    <div class = "nav" id = "prev_q">

    </div>
    <div id = "question_display">

    </div>
    <div class = "nav" id = "next_q">

    </div>

    <br/>
    <div id = "post_bar" style="text-align: left">
            <ul id="bullets">

                <li id="active"><a href="#" id="current">Item one</a></li>
                <li><a href="#">The Parwan Valley lies between the Brisbane Ranges, Werribee Gorge State Park and the You Yangs. Its nearest town is Bacchus Marsh. The Valley was used as farming land from the mid-1850s onwards, but after several decades of agricultural abuse the soils became extremely saline causing erosion all around the valley. By 1948 it was estimated that erosion in the valley had reduced the holding capacity of the nearby Melton Reservoir by 20%. The Victorian Government compulsorily acquired the land and has been attempting to rescue the valley ever since.

                        At the center of the valley is White Elephant Ridge which demonstrates the effects of soil erosion. The valley was originally a seabed. 250 million years ago after the sea receded volcanic activity caused the valley to fault and drop down leaving two large escarpments on either side. Two creeks run through the valley, Parwan Creek to the west and Spring Creek to the east.</a></li>
                <li><a href="#">The Parwan Valley lies between the Brisbane Ranges, Werribee Gorge State Park and the You Yangs. Its nearest town is Bacchus Marsh. The Valley was used as farming land from the mid-1850s onwards, but after several decades of agricultural abuse the soils became extremely saline causing erosion all around the valley. By 1948 it was estimated that erosion in the valley had reduced the holding capacity of the nearby Melton Reservoir by 20%. The Victorian Government compulsorily acquired the land and has been attempting to rescue the valley ever since.

                        At the center of the valley is White Elephant Ridge which demonstrates the effects of soil erosion. The valley was originally a seabed. 250 million years ago after the sea receded volcanic activity caused the valley to fault and drop down leaving two large escarpments on either side. Two creeks run through the valley, Parwan Creek to the west and Spring Creek to the east.</a></li>
                <li><a href="#">Item four</a></li>
                <li><a href="#">Item five</a></li>
            </ul>
        </div>
</div>
</body>
</html>