<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Danny
 * Date: 4/17/14
 * Time: 11:55 AM
 **/

//test array
$arr = array("hello","world","how's","it","goin?", "ggg", "dwwer", "dwwer", "dwwer", "dwwer", "dwwer", "dwwer", "dwwer", "dwwer", "geree", "aerffds", "wefds", "dwwer", "dwwer", "dwwer", "dwwer", "dwwer", "dwwer");

// temporary value
$collegeID = "Tom Ato";
$class = 2015;

//filters
$filter1_array = array("hello","world","how's","it","goin?");
$filter2_array = array("hello","world","how's","it","goin?");
$filter3_array = array("hello","world","how's","it","goin?");
$filter4_array = array("hello","world","how's","it","goin?");
$filter5_array = array("hello","world","how's","it","goin?");

//
$secondaryinfo_array = "";
$name_array = "";
?>

<html>

<!-- insert header here -->

<style>

    body{
        /*display: inline;
       /* height: 100%;
        width: 100%;
        width: inherit;
        */
        width: auto;
        height: auto;
    }
    .fltrs{
        /* first half w/ drop-downs */
        /*width and height customized to a 1px border*/
        width: 15em;
        height: 100%;
        display: inline-block;
        float: left;
    }

    .line{
        /* line under "filters"*/
        width: 100%;
        height: 0;
        border: 1px solid black;
        /*margin-left: 10%;
        margin-right: 10%;
        */
        text-align: center;
        margin-top: -10%;
    }

    h1{
        /* "filters"
        margin-bottom: 5%;*/
    }

    p{
        margin-left: 10%;
        margin-bottom: -1%;
        margin-top: 7%;
        font-size: 24;
    }

    select{
        width: 80%;
        margin-left: 10%;
    }

    .heading{
        margin-left: 10%;
    }


    #main{

    }
    .results_container {

        width: 90%;
        height: 100%;
        margin-left: 15em;
        border-left: 1px black solid;

        /*width: 73%;
        padding-top: 3%;*/
    }
        /*
            .results_bin{
                display: inline;
                float: left;
                width: 100%;

            }
        */

/*
    .line2{
        /* line under "filters"*//*
        width: 8em;
        padding-right: 2em;
        height: 0;
        border: 1px solid black;
        /*margin-left: 10%;
        margin-right: 10%;
        *//*
        text-align: center;
        margin-top: -5%
    }*/

    .results{
        float: left;
        display: inline;
        width: 16em;
        margin-left: 2.5%;
        margin-bottom: 2.5%;
        height: 16em;

        /*border: 1px solid black;*/
    }

    .propic{
        border: 1px solid black;
        width: 80%;
        height: 100%;
        display: block;
        margin-left: auto;
        margin-right: auto;
    }

    .top{
        height: 85%;
        width: 100%;
    }

    .bottom{
        height: 15%;
        width: 100%;
    }

    .info{
        text-align: right;
        border: 1px solid black;
        width: 80%;
        height: 100%;
        display: block;
        margin-left: auto;
        margin-right: auto;
        padding-bottom: 1%;
    }

        /*
        .info{
            border: 1px solid black;
            margin-right: 10%;
            height: 100%;
            display: block;
            text-align: right;
        }
    */

    .pic_form{
        width: 100%;
        height: 100%;
    }

    .name{
        font-weight: bold;
    }

    .class_number{

    }
/*
    #container {
        width: inherit;
        height: inherit;
        margin: 0;
        padding: 0;
        background-color: pink;
    }
*/

</style>

<title>
    College Filter
</title>

<body> <!-- style="display: inline"> -->
<div id = "main">
<div class="fltrs"> <!-- style="margin: 0" -->

    <h1 class="heading">Filters</h1>

    <div class="line"></div>

    <p>1st Filter</p>
    <select>
        <?php foreach ($filter1_array as $year) : ?>
            <option value="<?php echo $year ?>"><?php echo $year ?></option>
        <?php endforeach ; ?>
    </select>

    <p>2nd Filter</p>
    <select>
        <?php foreach ($filter2_array as $college) : ?>
            <option value="<?php echo $college ?>"><?php echo $college ?></option>
        <?php endforeach ; ?>
    </select>

    <p>3rd Filter</p>
    <select>
        <?php foreach ($filter3_array as $major) : ?>
            <option value="<?php echo $major ?>"><?php echo $major ?></option>
        <?php endforeach ; ?>
    </select>

    <p>4th Filter</p>
    <select>
        <?php foreach ($filter4_array as $type) : ?>
            <option value="<?php echo $type ?>"><?php echo $type ?></option>
        <?php endforeach ; ?>
    </select>

    <p>5th Filter</p>
    <select>
        <?php foreach ($filter5_array as $title) : ?>
            <option value="<?php echo $title ?>"><?php echo $title ?></option>
        <?php endforeach ; ?>
    </select>

</div>




<div class="results_container">
    <!-- php for statement making rows of 4 profiles -->
    <?php foreach($arr as $value) : ?>
        <!-- add place for action -->
        <form action="College_Page.php" method="post">
            <input type="hidden" name="college_ID" value="<?php echo $collegeID ?>">
            <div class="results">
                <div class="top">
                    <input class="propic" type="image" src="../resources/College.jpg" alt="Submit">
                    <!--<img class="propic" src="../resources/BlankFace.jpg"> -->
                </div>
                <div class="bottom">
                    <div class="info">
                        <div class="name">
                            <?php echo $value?>
                        </div>
                        <div class="class_number">
                            <?php echo $class?>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    <?php endforeach; ?>
</div>
</div>
</body>

<!-- insert footer here -->

</html>