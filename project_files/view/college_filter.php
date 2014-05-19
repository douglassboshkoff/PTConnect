<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Danny
 * Date: 4/17/14
 * Time: 11:55 AM
 **/

include "../model/university_db.php";
include "../model/database.php";

//test array
$arr = array("goin?", "ggg", "dwwer", "dwwer", "dwwer", "dwwer", "dwwer", "hello","world","how's","it","goin?", "ggg", "dwwer", "dwwer", "dwwer", "dwwer", "dwwer", "dwwer", "dwwer", "dwwer", "geree", "aerffds", "wefds", "dwwer", "dwwer", "dwwer", "dwwer", "dwwer", "dwwer","goin?", "ggg", "dwwer", "dwwer", "dwwer", "dwwer", "dwwer");

// temporary value
$collegeID = "Tom Ato";
$class = 2015;

if(isset($_POST['name'])){
    $nameIn = $_POST['name'];
}
else{
    $nameIn = "";
}
if(isset($_POST['location'])){
    $locationIn = $_POST['location'];
}
else{
    $locationIn = "";
}
if(isset($_POST['type'])){
    $typeIn = $_POST['type'];
}
else{
    $typeIn = "";
}


//filters
$name_array = array("hello","world","how's","it","goin?");
$location_array = array("hello","world","how's","it","goin?");
$type_array = array("hello","world","how's","it","goin?");

//
$secondaryinfo_array = "";
$name_array = "";
?>

<html>

<!-- insert header here -->

<style>
    div{
    }
    body{
        /*display: inline;
       /* height: 100%;
        width: 100%;
        width: inherit;
        */
        width: auto;
        height: <?php echo 17.25*(count($arr)/3);?>em;
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
        border-left: 2px black solid;

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
        margin-left: 1em;
        margin-bottom: 1em%;
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

    <form action="college_filter.php" method="post">
    <p>Name</p>
    <select name="name">
        <?php if($nameIn != "") : ?>
            <option value="<?php echo $nameIn?>"><?php echo $nameIn ?></option>
        <?php endif ; ?>
        <?php foreach ($name_array as $name) : ?>
            <?php if($name['name'] != $nameIn) : ?>
                <option value="<?php echo $name['name'] ?>"><?php echo $name['name'] ?></option>
            <?php endif ; ?>
        <?php endforeach ; ?>
    </select>

    <p>Location</p>
    <select name="location">
        <?php if($locationIn != "") : ?>
            <option value="<?php echo $locationIn?>"><?php echo $locationIn ?></option>
        <?php endif ; ?>
        <?php foreach ($location_array as $location) : ?>
            <?php if($location['location'] != $locationIn) : ?>
                <option value="<?php echo $location['location'] ?>"><?php echo $location['location'] ?></option>
            <?php endif ; ?>
        <?php endforeach ; ?>
    </select>

    <p>Type</p>
    <select name="type">
        <?php if($typeIn != "") : ?>
            <option value="<?php echo $typeIn?>"><?php echo $typeIn ?></option>
        <?php endif ; ?>
        <?php foreach ($type_array as $type) : ?>
            <?php if($type['type'] != $typeIn) : ?>
                <option value="<?php echo $type['type'] ?>"><?php echo $type['type'] ?></option>
            <?php endif ; ?>
        <?php endforeach ; ?>
    </select>


    <input class="submit" type="submit" value="Search">
    </form>

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