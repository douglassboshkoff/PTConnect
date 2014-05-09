<?php
include('../validate/fields.php');
include('../validate/validate.php');
include('../model/questions_db.php');
$fields = new Register\fields();

$fields->addField('type','You must choose your type of experience.');
$fields->addField('title','You must choose the title of your experience.');
$fields->addField('other','Must choose a type.');

$type = new Register\field('type','Must choose a type.');
$title = new Register\field('title','You must choose a title for your experience.');
$other = new Register\field('other');
$validate = new Register\validate();

if(isset($_POST['action']))
{
    $action = $_POST['action'];
}
else
{
    $action='display';
}

if($action === 'display')
{
    //$experiences = get_experiences(1);
}
else if($action === 'edit')
{
    //grab data from the userid.
}
else if($action === 'populate_edit')
{
    //populate the text boxes with edit data
}
else if($action === 'add')
{
    //update the data for a user with the specified fields.
}
else if($action === 'delete')
{
    //delete the data
}

echo $action;
?>
<!DOCTYPE html>
<html>
	<head>
        <script type="text/javascript" src="../js/jQuery.js"></script>
        <script type="text/javascript" src="../js/dropdown_text_exp.js"></script>
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
				width: 71%;
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
                width: 320px;
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
			label {
				padding-right: 20px;
                margin-right: 20px
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
            .other_box {
                font-family: "HelveticaNeue-Thin", "Helvetica Neue Thin", "Helvetica Neue", Helvetica, sans-serif;
                background: transparent;
                padding: 4px;
                font-size: 16px;
                line-height: 1;
                border-radius: 0;
                border: 1px solid #ccc;
                width: 320px;
                height: 28px;
            }
            form input[type="submit"]{

                background: none;
                border: none;
                color: black;
                text-decoration: underline;
                cursor: pointer;
                font-size: 16px;
            }

		</style>
        <script type=text/javascript"" src="../js/jQuery.js"></script>
        <script type="text/javascript" src="../js/option.js"></script>
	</head>
	<body>
		<div id='table'>
			<table>
                <?php // foreach($experience as $experiences) { ?>
				<tr>
					<td><h1></h1></td>

					<td>
                        <form action="myexperiences.php" method="post" name="review">
                        <input type="submit" value="edit" name="submit"/>
                        <input type="hidden" value="edit" name="action"/>
                        </form>
                    </td>
					<td>
                        <form action="myexperiences.php" method="post">
                            <input type="submit" value="delete" name="submit"/>
                            <input type="hidden" value="delete" name="action"/>
                        </form>

				</tr>
                <?php //} ?>
			</table>
		</div>
		<div id="add">
			<h1><?php if($action==='display') { echo "Add Experience";} else { echo "Edit Experience";} ?></h1>
			<form method="post" action="myexperiences.php">
				<label>Type</label>
				<select class="dropdown">
					<option>CS Competition</option>
					<option>Internship</option>
					<option>Job</option>
                    <option>Other</option>
				</select>
				<br/>
				<label style="margin-right: 25px">Title</label>
				<select class="dropdown" id = "titleselect">
                    <option></option>
					<option>Miami of Ohio CS Competition</option>
					<option>Google Internship</option>
				    <option value = "1" >Other</option>
                </select>
                <div id = "titlediv">  <input type="text" id="titletextbox" />  </div>

                <br/>
                <textarea class="other_box" hidden="hidden"></textarea>
				<br/>
				<h2>Question 1 Text</h2>
				<textarea class="questions" rows="4" ></textarea>
				<h2>Question 2 Text</h2>
				<textarea class="questions" rows="4"></textarea>
				<h2>Question 3 Text</h2>
				<textarea class="questions" rows="4"></textarea>
				<input type="submit" id="addButton" value="Add">
                <input type="hidden" id="action" value="<?php if($action === 'display'){ $action='add';}else{$action='edit';} echo $action;?>">
			</form>
		</div>
	</body>
</html>