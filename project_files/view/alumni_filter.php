<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Danny
 * Date: 4/17/14
 * Time: 11:55 AM
 **/
include "../model/user_db.php";
//test array
$arr = array("hello","world","how's","it","goin?", "ggg", "dwwer", "dwwer", "dwwer", "dwwer", "dwwer", "dwwer", "dwwer", "dwwer", "geree", "aerffds", "wefds", "dwwer", "dwwer", "dwwer", "dwwer", "dwwer", "dwwer");

// temporary values
$class = 2015;
// identification value
$user_email = "Tom Ato";

$grad_year_array = array("hello","world","how's","it","goin?");
$college_array = array("hello","world","how's","it","goin?");
$major_array = array("hello","world","how's","it","goin?");
$experience_type_array = array("hello","world","how's","it","goin?");
$experience_title_array = array("hello","world","how's","it","goin?");

$class_array = "";
$name_array = "";
?>
<html>

<!-- insert header here -->

<style>
    body{
        display: inline;
        height: 100%;
        width: 100%;
    }
    .fltrs{
        /* first half w/ drop-downs */
        /*width and height customized to a 1px border*/
        width: 25%;
        height: 80%;
        float: left;
    }

    .line{
        /* line under "filters"*/
        width: 80%;
        height: 0;
        border: 1px solid black;
        margin-left: 10%;
        margin-right: 10%;
        text-align: center;
        margin-top: -5%
    }

    h1{
        /* "filters" */
        margin-bottom: 5%;
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

    .divider{
        display: inline;
        float: left;
        width: .1%;
        height: 99.8%;
        background-color: black;
        border: 1px solid black;
        position: fixed;
    }

    .results_container {
        float: left;
        width: 73%;
        padding-top: 3%;
    }
        /*
            .results_bin{
                display: inline;
                float: left;
                width: 100%;

            }
        */
    .results{
        float: left;
        display: inline;
        width: 22%;
        margin-left: 2.5%;
        margin-bottom: 2.5%;
        height: 33%;
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
        position: fixed;
    }

    .name{
        font-weight: bold;
    }

    .class_number{

    }

</style>

<title>
    Alumni Filter
</title>

<body> <!-- style="display: inline"> -->

<div class="fltrs"> <!-- style="margin: 0" -->

    <h1 class="heading">Filters</h1>

    <div class="line"></div>

    <p>PT Grad Year</p>
    <select>
        <?php foreach ($grad_year_array as $year) : ?>
        <option value="<?php echo $year ?>"><?php echo $year ?></option>
        <?php endforeach ; ?>
    </select>

    <p>College</p>
    <select>
        <?php foreach ($college_array as $college) : ?>
            <option value="<?php echo $college ?>"><?php echo $college ?></option>
        <?php endforeach ; ?>
    </select>

    <p>Major</p>
    <select>
        <?php foreach ($major_array as $major) : ?>
            <option value="<?php echo $major ?>"><?php echo $major ?></option>
        <?php endforeach ; ?>
    </select>

    <p>Experience Type</p>
    <select>
        <?php foreach ($experience_type_array as $type) : ?>
            <option value="<?php echo $type ?>"><?php echo $type ?></option>
        <?php endforeach ; ?>
    </select>

    <p>Experience Title</p>
    <select>
        <?php foreach ($experience_title_array as $title) : ?>
            <option value="<?php echo $title ?>"><?php echo $title ?></option>
        <?php endforeach ; ?>
    </select>

</div>
<div class="divider"></div>
<div class="results_container">
    <!-- php for statement making rows of 4 profiles -->
    <?php foreach($arr as $name) : ?>
        <!-- add place for action -->
        <form action="User_Profilepage.php" method="post">
            <input type="hidden" name="userID" value="<?php echo $user_email ?>">
            <div class="results">
                <div class="top">
                    <input class="propic" type="image" src="../resources/BlankFace.jpg" alt="Submit">
                    <!--<img class="propic" src="../resources/BlankFace.jpg"> -->
                </div>
                <div class="bottom">
                    <div class="info">
                        <div class="name">
                            <?php echo $name?>
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
</body>

<!-- insert footer here -->

</html>