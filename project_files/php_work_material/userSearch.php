<?php
include "../model/accounts_db.php";
include "../model/university_db.php";
include "../model/concentration_db.php";
include "../model/experiences_db.php";
include "../model/database.php";

include "header.php";

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
	<head>
		<link rel="stylesheet" type="text/css" href="stylesheet.css" />
	</head>
	<body>
		<div id="filters">
			<h1>Filters</h1>
			<label>PT Grad Year</label></br>
			<select id="dropdown">
					<option>PT Grad Year</option>
					<option>2017</option>
					<option>2016</option>
					<option>2015</option>
					<option>2014</option>
					<option>2013</option>
					<option>2012</option>
					<option>2011</option>
					<option>2010</option>
					<option>2010</option>
					<option>2010</option>
					<option>2009</option>
					<option>2008</option>
					<option>2007</option>
					<option>2006</option>
					<option>2005</option>
					<option>2004</option>
			</select></br>
			<label>College</label></br>
			<select id="dropdown">
					<option>College</option>
					<option>2017</option>
					<option>2016</option>
					<option>2015</option>
					<option>2014</option>
					<option>2013</option>
					<option>2012</option>
					<option>2011</option>
					<option>2010</option>
					<option>2010</option>
					<option>2010</option>
					<option>2009</option>
					<option>2008</option>
					<option>2007</option>
					<option>2006</option>
					<option>2005</option>
					<option>2004</option>
			</select></br>
			<label>Major</label></br>
			<select id="dropdown">
					<option>Major</option>
					<option>2017</option>
					<option>2016</option>
					<option>2015</option>
					<option>2014</option>
					<option>2013</option>
					<option>2012</option>
					<option>2011</option>
					<option>2010</option>
					<option>2010</option>
					<option>2010</option>
					<option>2009</option>
					<option>2008</option>
					<option>2007</option>
					<option>2006</option>
					<option>2005</option>
					<option>2004</option>
			</select></br>
			<label>Experience Type</label></br>
			<select id="dropdown">
					<option>Experience Type</option>
					<option>2017</option>
					<option>2016</option>
					<option>2015</option>
					<option>2014</option>
					<option>2013</option>
					<option>2012</option>
					<option>2011</option>
					<option>2010</option>
					<option>2010</option>
					<option>2010</option>
					<option>2009</option>
					<option>2008</option>
					<option>2007</option>
					<option>2006</option>
					<option>2005</option>
					<option>2004</option>
			</select></br>
			<label>Experience Title</label></br>
			<select id="dropdown">
					<option>Experience Title</option>
					<option>2017</option>
					<option>2016</option>
					<option>2015</option>
					<option>2014</option>
					<option>2013</option>
					<option>2012</option>
					<option>2011</option>
					<option>2010</option>
					<option>2010</option>
					<option>2010</option>
					<option>2009</option>
					<option>2008</option>
					<option>2007</option>
					<option>2006</option>
					<option>2005</option>
					<option>2004</option>
			</select></br>
		</div>
		<div id="content">
			<div id="user">
				<a href="profile.php"><img src="profile.png"/></a>
				<a href="profile.php"><h2>Alex Gottwald</h2></a>
				<h3>PT 2015</h3>
			</div>
			<div id="user">
				<a href="profile.php"><img src="profile.png"/></a>
				<a href="profile.php"><h2>Alex Gottwald</h2></a>
				<h3>PT 2015</h3>
			</div>
			<div id="user">
				<a href="profile.php"><img src="profile.png"/></a>
				<a href="profile.php"><h2>Alex Gottwald</h2></a>
				<h3>PT 2015</h3>
			</div>
			<div id="user">
				<a href="profile.php"><img src="profile.png"/></a>
				<a href="profile.php"><h2>Alex Gottwald</h2></a>
				<h3>PT 2015</h3>
			</div>
			<div id="user">
				<a href="profile.php"><img src="profile.png"/></a>
				<a href="profile.php"><h2>Alex Gottwald</h2></a>
				<h3>PT 2015</h3>
			</div>
			<div id="user">
				<a href="profile.php"><img src="profile.png"/></a>
				<a href="profile.php"><h2>Alex Gottwald</h2></a>
				<h3>PT 2015</h3>
			</div>
			<div id="user">
				<a href="profile.php"><img src="profile.png"/></a>
				<a href="profile.php"><h2>Alex Gottwald</h2></a>
				<h3>PT 2015</h3>
			</div>
		</div>
	</body>
<?php include "footer.php" ?>
</html>
