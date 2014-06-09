<?php
include "../model/accounts_db.php";
include "../model/university_db.php";
include "../model/concentration_db.php";
include "../model/experiences_db.php";
include "../model/database.php";

include "header.php";
$newArr = accounts_filter("", "", "");
$arr = array("hello","world","how's","it","goin?", "ggg", "dwwer", "dwwer", "dwwer", "dwwer", "dwwer", "dwwer", "dwwer", "dwwer", "geree", "aerffds", "wefds", "dwwer", "dwwer", "dwwer", "dwwer", "dwwer", "dwwer");

// temporary values
$class = 2015;
// identification value
$user_email = "Tom Ato";

$grad_year_array = get_grad_years();
$college_array = get_colleges();
$major_array = danny_get_majors();
$experience_type_array = danny_get_types();
$experience_title_array = danny_get_all_titles();

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

$newArr = accounts_filter("", "", "");

$class_array = "";
$name_array = "";
?>
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
<div id="filters">
    <h1>Filters</h1>
    <label>PT Grad Year</label></br>
    <select id="dropdown">
        <?php if($yearIn != "") : ?>
            <option value="<?php echo $yearIn?>"><?php echo $yearIn ?></option>
        <?php endif ; ?>
        <?php foreach ($grad_year_array as $year) : ?>
            <?php if($year['pt_grad_year'] != $yearIn) : ?>
                <option value="<?php echo $year['pt_grad_year'] ?>"><?php echo $year['pt_grad_year'] ?></option>
            <?php endif ; ?>
        <?php endforeach ; ?>
    </select></br>
    <label>College</label></br>
    <select id="dropdown">
        <?php if($collegeIn != "") : ?>
            <option value="<?php echo $collegeIn?>"><?php echo $collegeIn ?></option>
        <?php endif ; ?>
        <?php foreach ($college_array as $college) : ?>
            <?php if($college['name'] != $collegeIn) : ?>
                <option value="<?php echo $college['name'] ?>"><?php echo $college['name'] ?></option>
            <?php endif ; ?>
        <?php endforeach ; ?>
    </select></br>
    <label>Major</label></br>
    <select id="dropdown">
        <?php if($majorIn != "") : ?>
            <option value="<?php echo $majorIn?>"><?php echo $majorIn ?></option>
        <?php endif ; ?>
        <?php foreach ($major_array as $major) : ?>
            <?php if($major['name'] != $majorIn) : ?>
                <option value="<?php echo $major['name'] ?>"><?php echo $major['name'] ?></option>
            <?php endif ; ?>
        <?php endforeach ; ?>
    </select></br>
    <label>Experience Type</label></br>
    <select id="dropdown">
        <?php if($typeIn != "") : ?>
            <option value="<?php echo $typeIn?>"><?php echo $typeIn ?></option>
        <?php endif ; ?>
        <?php foreach ($experience_type_array as $type) : ?>
            <?php if($type['type'] != $typeIn) : ?>
                <option value="<?php echo $type['type'] ?>"><?php echo $type['type'] ?></option>
            <?php endif ; ?>
        <?php endforeach ; ?>
    </select></br>
    <label>Experience Title</label></br>
    <select id="dropdown">
        <?php if($titleIn != "") : ?>
            <option value="<?php echo $titleIn?>"><?php echo $titleIn ?></option>
        <?php endif ; ?>
        <?php foreach ($experience_title_array as $title) : ?>
            <?php if($title['title'] != $titleIn) : ?>
                <option value="<?php echo $title['title'] ?>"><?php echo $title['title'] ?></option>
            <?php endif ; ?>
        <?php endforeach ; ?>
    </select></br>
</div>


<div id="content">

    <?php foreach($newArr as $name) : ?>

        <div id="user">
            <a href="profile.php"><img src="profile.png"/></a>
            <form action="profile.php" method="post">
                <input type="submit" value="<?php echo $name['first_name']." ".$name['last_name']?>">
                <input type="hidden" name="name" value="<?php echo $name['email']?>">
            </form>
            <!--<a href="profile.php"><h2><?php echo $name?></h2></a>
                    -->
            <h3>PT <?php echo $name['pt_grad_year'] ?></h3>
        </div>
        <!-- add place for action
                <form action="User_Profilepage.php" method="post">
                    <input type="hidden" name="userID" value="<?php echo $user_email ?>">
                    <div class="results">
                        <div class="top">
                            <input class="propic" type="image" src="../resources/BlankFace.jpg" alt="Submit">
                            <!--<img class="propic" src="../resources/BlankFace.jpg">
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
                </form> -->
    <?php endforeach; ?>
</div>
</body>
<?php include "footer.php" ?>
</html>
