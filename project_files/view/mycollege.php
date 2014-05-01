<?php
    $action = $_POST['action'];

    if($action === 'edit')
    {
        //grab data from the userid.
    }
    else if($action === 'add')
    {
        //update the data for a user with the specified fields.
    }
    else if($action === 'delete')
    {
       //delete the data
    }
?>
<!DOCTYPE html>

<html>
	<head>
        <script type="text/javascript" src="../js/jQuery.js"></script>
        <script type="text/javascript" src="../js/dropdown_text.js"></script>
		<style>
			body {
				min-width: 600px;
				margin: 0;
			}
			#top ul {
			  width: 100%;
			  margin: 0;
			  padding: 0;
			  position: relative;
			  display: block;
			  background: #000000;
			  font-family: "HelveticaNeue-Thin", "Helvetica Neue Thin", "Helvetica Neue", Helvetica, sans-serif;
			  display: table;
			  clear: both;
			}
			#top li {
			  display: block;
			  float: left;
			  font-size: 32px;
			  padding: 15px 0px 10px 15px;
			}
			#top img {
				display: block;
				float: right;
				width: 30px;
				height: 42px;
				padding: 10px 15px 5px 0px;
			}
			#top img:hover {
				opacity: .4;
			}
			#white {
				color: white;
			}
			#red {
				color: red;
			}
			#tabs ul {
			  width: 100%;
			  margin: 0;
			  padding: 0;
			  position: relative;
			  display: block;
			  background: #000000;
			  font-family: "HelveticaNeue-Thin", "Helvetica Neue Thin", "Helvetica Neue", Helvetica, sans-serif;
			  display: table;
			  clear: both;
			}
			#tabs li {
			  display: block;
			  float: left;
			  margin: 0;
			  width: calc(25% - 2px);
			  border: 1px solid white;
			}
			#tabs li a {
			  display: block;
			  float: center;
			  color: white;
			  text-align: center;
			  text-decoration: none;
			  font-size: 14px;
			  padding: 5px 0px 5px 0px;
			}
			#tabs li a:hover {
			  color: red;
			}
			#tabs li.active a {
			  color: red;
			}
			#table {
				border: 1px solid black;
				width: 75%;
				display: block;
				margin: 20px auto 0 auto;
				font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, sans-serif;
			}
			#table td {
				padding: 10px 10px 10px 10px;
			}
			#table #name {
				float: right;
			}
			#table td h1 {
				font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, sans-serif;
				text-decoration: none;
				font-weight: normal;
				font-size: 24px;
			}
			#table td a {
				color: black;
			}
			.dropdown {
				font-family: "HelveticaNeue-Thin", "Helvetica Neue Thin", "Helvetica Neue", Helvetica, sans-serif;
				background: transparent;
				padding: 4px;
				font-size: 16px;
				line-height: 1;
				border: 0;
				border-radius: 0;
				-webkit-appearance: none;
			    background: url("http://cdn.bavotasan.com/wp-content/uploads/2011/05/down_arrow_select.jpg") no-repeat right white;
			    border: 1px solid #ccc;
			    box-shadow: inset 1px 1px 0px 0px #dddddd;
			}
			.dropdown option {
				font-family: "HelveticaNeue-Thin", "Helvetica Neue Thin", "Helvetica Neue", Helvetica, sans-serif;
			}
			#add {
				width: 70%;
				display: block;
				margin: 20px auto 0 auto;
				font-family: "HelveticaNeue-Thin", "Helvetica Neue Thin", "Helvetica Neue", Helvetica, sans-serif;
			}
			#add h1 {
				font-weight: normal;
			}
			#add h2 {
				font-weight: normal;
			}
			#college {
				width: 200px;
			}
			label {
				padding-right: 20px;
			}
			.questions {
				display: inline-block;
				width: 100%;
				margin-left: auto;
				margin-right: auto;
			}
			#addButton {
				-webkit-appearance: none;
				border-radius: 0;
				background: transparent;
				background: red;
				color: white;
				border: 0;
				width: 50px;
				font-size: 16px;
				font-family: "HelveticaNeue-Thin", "Helvetica Neue Thin", "Helvetica Neue", Helvetica, sans-serif;
				float: right;
			}
            #firstlabel{
                padding-right: 26px;
            }

		</style>
	</head>
	<body>
		<div id='top'>
			<ul>
			   <li><span id="white">PT</span><span id="red">Connect</span></li>
			   <img src="profile.png" />
			</ul>
		</div>
		<div id='tabs'>
			<ul>
			   <li><a href='main.html'><span>Home</span></a></li>
			   <li class="active"><a href='mycollege.php'><span>My College</span></a></li>
			   <li><a href='#'><span>My Employer</span></a></li>
			   <li class='last'><a href='#'><span>My Profile</span></a></li>
			</ul>
		</div>
		<div id='table'>
			<table>
				<tr>
					<td><h1>Purdue University</h1></td>
					<td><a href="http://google.com">edit</a></td>
					<td><a href="http://google.com">delete</a></td>

				</tr>
				<tr>
					<td><h1>Harvard University</h1></td>
					<td><a href="http://google.com">edit</a></td>
					<td><a href="http://google.com">delete</a></td>
				</tr>
			</table>
		</div>

		<div id="add">
			<h1>Add College</h1>
			<form method="post" action="index.php">
				<label id = "firstlabel">School</label>
				<select class="dropdown" id="college">
					<option>College</option>
					<option>Harvard University</option>
					<option>Purdue University</option>
                    <option value = "1" class = ".textexp"> Other </option>
				</select>
                <div id = "hiddendiv">  <input type="text" id="othertextbox" />  </div>
				<br>
				<label>Major 1</label>
				<select class="dropdown" id = "major1">
					<option>Major 1</option>
					<option>Computer Engineering</option>
					<option>Computer Science</option>
                    <option value = "1" class = ".textexp"> Other </option>
                </select>
                <div id = "majordiv1">  <input type="text" id="majorothertextbox" />  </div>
				<label>Major 2</label>
				<select class="dropdown" id = "major2">
					<option>Major 2</option>
					<option>Computer Engineering</option>
					<option>Computer Science</option>
                    <option value = "1" class = ".textexp"> Other </option>
                </select>
                <div id = "majordiv2">  <input type="text" id="majorothertextbox2" />  </div>
				<br/>
				<label>Minor 1</label>
				<select class="dropdown" id = "minor1">
					<option>Minor 1</option>
					<option>Computer Engineering</option>
					<option>Computer Science</option>
                    <option value = "1" class = ".textexp"> Other </option>
                </select>
                <div id = "minordiv1">  <input type="text" id="minorothertextbox" />  </div>
				<label>Minor 2</label>
				<select class="dropdown" id = "minor2">
					<option>Minor 2</option>
					<option>Computer Engineering</option>
					<option>Computer Science</option>
                    <option value = "1" class = ".textexp"> Other </option>
                </select>
                <div id = "minordiv2">  <input type="text" id="minorothertextbox2" />  </div>
				<h2>Question 1 Text</h2>
				<textarea class="questions" rows="4"></textarea>
				<h2>Question 2 Text</h2>
				<textarea class="questions" rows="4"></textarea>
				<h2>Question 3 Text</h2>
				<textarea class="questions" rows="4"></textarea>
				<input type="submit" id="addButton" value="Add">
			</form>
		</div>
	</body>
</html>