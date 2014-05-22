<?php

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
$name_array = get_colleges();
$location_array = get_college_locations();
$type_array = array("hello","world","how's","it","goin?");

//
$secondary_info_array = "";
$secondary_name_array = "";
?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="stylesheet.css" />
</head>
<body>
<div id="wrapper1">
    <div id='wrapper2'>
        <div id="filters">
            <h1>Filters</h1>
            <label>Name</label></br>
            <select name="name" id="dropdown">
                <?php if($nameIn != "") : ?>
                    <option value="<?php echo $nameIn?>"><?php echo $nameIn ?></option>
                <?php endif ; ?>
                <?php foreach ($name_array as $name) : ?>
                    <?php if($name['name'] != $nameIn) : ?>
                        <option value="<?php echo $name['name'] ?>"><?php echo $name['name'] ?></option>
                    <?php endif ; ?>
                <?php endforeach ; ?>
            </select>

            <label>Location</label></br>
            <select name="name" id="dropdown">
                <?php if($locationIn != "") : ?>
                    <option value="<?php echo $locationIn?>"><?php echo $locationIn ?></option>
                <?php endif ; ?>
                <?php foreach ($location_array as $location) : ?>
                    <?php if($location['location'] != $locationIn) : ?>
                        <option value="<?php echo $location['location'] ?>"><?php echo $location['location'] ?></option>
                    <?php endif ; ?>
                <?php endforeach ; ?>
            </select></br>

            <label>Type</label></br>
            <select name="type" id="dropdown">
                <option value=""></option>
                <!--
                <?php if($typeIn != "") : ?>
                    <option value="<?php echo $typeIn?>"><?php echo $typeIn ?></option>
                <?php endif ; ?>
                <?php foreach ($type_array as $type) : ?>
                    <?php if($type['type'] != $typeIn) : ?>
                        <option value="<?php echo $type['type'] ?>"><?php echo $type['type'] ?></option>
                    <?php endif ; ?>
                <?php endforeach ; ?>
                -->
            </select></br>
        </div>
        <div id="content">
            <?php foreach($arr as $value) : ?>
                <!-- add place for action -->
                <form action="College_Page.php" method="post">
                    <input type="hidden" name="college_ID" value="<?php echo $collegeID ?>">
                    <div id="college">
                        <input class="propic" type="image" src="../resources/College.jpg" alt="Submit">

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
            <div id="college">
                <a href="../html_originals/college.html"><img src="purdue.png"/></a>
                <a href="../html_originals/college.html"><h2>Purdue University</h2></a>
                <h3>West Lafayette, IN</h3>
            </div>
            <div id="college">
                <a href="../html_originals/college.html"><img src="purdue.png"/></a>
                <a href="../html_originals/college.html"><h2>Purdue University</h2></a>
                <h3>West Lafayette, IN</h3>
            </div>
            <div id="college">
                <a href="../html_originals/college.html"><img src="purdue.png"/></a>
                <a href="../html_originals/college.html"><h2>Purdue University</h2></a>
                <h3>West Lafayette, IN</h3>
            </div>
            <div id="college">
                <a href="../html_originals/college.html"><img src="purdue.png"/></a>
                <a href="../html_originals/college.html"><h2>Purdue University</h2></a>
                <h3>West Lafayette, IN</h3>
            </div>
            <div id="college">
                <a href="../html_originals/college.html"><img src="purdue.png"/></a>
                <a href="../html_originals/college.html"><h2>Purdue University</h2></a>
                <h3>West Lafayette, IN</h3>
            </div>
            <div id="college">
                <a href="../html_originals/college.html"><img src="purdue.png"/></a>
                <a href="../html_originals/college.html"><h2>Purdue University</h2></a>
                <h3>West Lafayette, IN</h3>
            </div>
            <div id="college">
                <a href="../html_originals/college.html"><img src="purdue.png"/></a>
                <a href="../html_originals/college.html"><h2>Purdue University</h2></a>
                <h3>West Lafayette, IN</h3>
            </div>
            <div id="college">
                <a href="../html_originals/college.html"><img src="purdue.png"/></a>
                <a href="../html_originals/college.html"><h2>Purdue University</h2></a>
                <h3>West Lafayette, IN</h3>
            </div>
        </div>
    </div>
</div>
</body>
</html>
