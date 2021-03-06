<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include "../model/university_db.php";
include "../model/database.php";
include "header.php";


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

$newArr = university_filter($nameIn, $locationIn, $typeIn);

//filters
$name_array = get_colleges();
$location_array = get_college_locations();
$type_array = array("Private", "Public");

//
$secondary_info_array = "";
$secondary_name_array = "";
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="stylesheet.css" />
</head>
<style>
    form input[type="submit"]{

        background: none;
        border: none;
        color: black;
        text-decoration: underline;
        cursor: pointer;
        font-size: 16px;
    }
</style>
<body>
<div id="wrapper1">
    <div id='wrapper2'>
        <div id="filters">
            <h1>Filters</h1>
            <form action="collegeSearch.php" method="post">
                <label>Name</label></br>
                <select name="name" id="dropdown">
                    <?php if($nameIn != "") : ?>
                        <option value="<?php echo $nameIn?>"><?php echo $nameIn ?></option>
                    <?php endif ; ?>
                    <option value="">(No Criteria)</option>
                    <?php foreach ($name_array as $name) : ?>
                        <?php if($name['name'] != $nameIn) : ?>
                            <option value="<?php echo $name['name'] ?>"><?php echo $name['name'] ?></option>
                        <?php endif ; ?>
                    <?php endforeach ; ?>
                </select>

                <label>Location</label></br>
                <select name="location" id="dropdown">
                    <?php if($locationIn != "") : ?>
                        <option value="<?php echo $locationIn?>"><?php echo $locationIn ?></option>
                    <?php endif ; ?>
                    <option value="">(No Criteria)</option>
                    <?php foreach ($location_array as $location) : ?>
                        <?php if($location['location'] != $locationIn) : ?>
                            <option value="<?php echo $location['location'] ?>"><?php echo $location['location'] ?></option>
                        <?php endif ; ?>
                    <?php endforeach ; ?>
                </select></br>
                <!-- 0 is private, 1 is public  -->
                <label>Type</label></br>
                <select name="type" id="dropdown">
                    <?php if($typeIn == "" || $typeIn == " ") : ?>
                        <option value="">(No Criteria)</option>
                        <option value="0">Public</option>
                        <option value="1">Private</option>
                    <?php elseif($typeIn == "0") : ?>
                        <option value="0">Public</option>
                        <option value="">(No Criteria)</option>
                        <option value="1">Private</option>
                    <?php elseif($typeIn == "1") : ?>
                        <option value="1">Private</option>
                        <option value="">(No Criteria)</option>
                        <option value="0">Public</option>
                    <?php endif ; ?>
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

                <input class="submit" type="submit" value="Search">
            </form>
        </div>

        <div id="content">
            <?php foreach($newArr as $value) : ?>
                <div id="college">
                    <a href="../html_originals/college.html"><img src="purdue.png"/></a>
                    <form action="college.php" method="post">
                        <input type="submit" value="<?php echo $value['name']?>">
                        <input type="hidden" name="university_id" value="<?php echo $value['id']?>">
                    </form>
                    <h3><?php echo $value['location']?></h3>
                </div>
                <!-- form stuff
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
                -->
            <?php endforeach; ?>
        </div>
    </div>
</div>
</div>
</body>
<?php include "footer.php"; ?>
</html>
