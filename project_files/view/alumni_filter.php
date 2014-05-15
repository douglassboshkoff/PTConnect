<?php
include "../model/accounts_db.php";
include "../model/university_db.php";
include "../model/concentration_db.php";
include "../model/experiences_db.php";
include "../model/database.php";

//test array
$arr = array("hello","world","how's","it","goin?", "ggg", "dwwer", "dwwer", "dwwer", "dwwer", "dwwer", "dwwer", "dwwer", "dwwer", "geree", "aerffds", "wefds", "dwwer", "dwwer", "dwwer", "dwwer", "dwwer", "dwwer");

// temporary values
$class = 2015;
// identification value
$user_email = "Tom Ato";

$grad_year_array = get_grad_years();
$college_array = get_colleges();
$major_array = get_majors();
$experience_type_array = get_types();
$experience_title_array = get_all_titles();

if(isset($_POST['year'])){
    $yearIn = $_POST['year'];
}
else{
    $yearIn = "";
}
if(isset($_POST['college'])){
    $collegeIn = $_POST['college'];
}
else{
    $collegeIn = "";
}
if(isset($_POST['major'])){
    $majorIn = $_POST['major'];
}
else{
    $majorIn = "";
}
if(isset($_POST['type'])){
    $typeIn = $_POST['type'];
}
else{
    $typeIn = "";
}
if(isset($_POST['title'])){
    $titleIn = $_POST['title'];
}
else{
    $titleIn = "";
}


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
    <form action="alumni_filter.php" method="post">
        <p>PT Grad Year</p>
        <select name="year">
            <?php if($yearIn != "") : ?>
                <option value="<?php echo $yearIn?>"><?php echo $yearIn ?></option>
            <?php endif ; ?>
            <?php foreach ($grad_year_array as $year) : ?>
                <?php if($year['pt_grad_year'] != $yearIn) : ?>
                    <option value="<?php echo $year['pt_grad_year'] ?>"><?php echo $year['pt_grad_year'] ?></option>
                <?php endif ; ?>
            <?php endforeach ; ?>
        </select>

        <p>College</p>
        <select id="college" name="college">
            <?php if($collegeIn != "") : ?>
                <option value="<?php echo $collegeIn?>"><?php echo $collegeIn ?></option>
            <?php endif ; ?>
            <?php foreach ($college_array as $college) : ?>
                <?php if($college['name'] != $collegeIn) : ?>
                    <option value="<?php echo $college['name'] ?>"><?php echo $college['name'] ?></option>
                <?php endif ; ?>
            <?php endforeach ; ?>
        </select>

        <p>Major</p>
        <select name="major">

            <?php if($majorIn != "") : ?>
                <option value="<?php echo $majorIn?>"><?php echo $majorIn ?></option>
            <?php endif ; ?>
            <?php foreach ($major_array as $major) : ?>
                <?php if($major['name'] != $majorIn) : ?>
                    <option value="<?php echo $major['name'] ?>"><?php echo $major['name'] ?></option>
                <?php endif ; ?>
            <?php endforeach ; ?>
        </select>

        <p>Experience Type</p>
        <select name="type">
            <?php if($typeIn != "") : ?>
                <option value="<?php echo $typeIn?>"><?php echo $typeIn ?></option>
            <?php endif ; ?>
            <?php foreach ($experience_type_array as $type) : ?>
                <?php if($type['type'] != $typeIn) : ?>
                    <option value="<?php echo $type['type'] ?>"><?php echo $type['type'] ?></option>
                <?php endif ; ?>
            <?php endforeach ; ?>

        </select>

        <p>Experience Title</p>
        <select name="title">
            <?php if($titleIn != "") : ?>
                <option value="<?php echo $titleIn?>"><?php echo $titleIn ?></option>
            <?php endif ; ?>
            <?php foreach ($experience_title_array as $title) : ?>
                <?php if($title['title'] != $titleIn) : ?>
                    <option value="<?php echo $title['title'] ?>"><?php echo $title['title'] ?></option>
                <?php endif ; ?>
            <?php endforeach ; ?>


        </select>

        <input class="submit" type="submit" value="Search">
    </form>

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