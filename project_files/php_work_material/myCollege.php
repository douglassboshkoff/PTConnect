<!DOCTYPE html>
<?php
include "../model/database.php";
include "../model/accounts_db.php";
include "../model/university_db.php";
include "../model/concentration_db.php";

$majors = get_majors();
$minors = get_minors();

if(isset($_POST['action']))
{
    $action = $_POST['action'];
}
else
{
    $action='display';
}



if($action==='display')
{
        $colleges = get_colleges();
}
else if($action === 'edit')
{

}
else if($action === 'populate_edit')
{

}
else if($action === 'add')
{

}
else if($action === 'delete')
{

}
?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="stylesheet.css" />
        <script type="text/javascript" src="../js/jQuery.js"></script>
        <script type="text/javascript" src="../js/dropdown_text.js"></script>
        <style>

          .dropdown2{
              width:240px;
          }
            </style>
	</head>
	<body>
	<div id="wrapper1">
    	<div id='wrapper2'>
		<div id='table'>
			<table>
                <?php  foreach($colleges as $college) { ?>
                    <tr>
                        <td><h1><?php echo $college['name']; ?></h1></td>
                        
                        <td>
                            <form action="../view/profile_index.php" method="post">
                                <input type="hidden" value="populate_edit" name="action"/>
                                <input type="hidden" value="<?php echo $college['location'] ?>" name="id"/>
                                <input id="submitLink" type="submit" value="edit" name="submit"/>
                                <input type="hidden" value="college" name="page"/>
                            </form>
                        </td>
                        <td>
                            <form action="../view/profile_index.php" method="post">
                                <input id="submitLink" type="submit" value="delete" name="submit"/>
                                <input type="hidden" value="<?php echo $college['id'] ?>" name="id"/>
                                <input type="hidden" value="delete" name="action"/>
                                <input type="hidden" value="college" name="page"/>
                            </form>
                            
                    </tr>
                <?php  } ?>
			</table>
		</div>
		<div id="add">
			<h1>Add College</h1>
			<form>
				<label>School</label>
				<select class="dropdown2" id="college2">
					<option>College</option>
					<option>Harvard University</option>
					<option>Purdue University</option>
                    <option value = "1" class = ".textexp"> Other </option>

                </select>
                <div id = "hiddendiv">  <input type="text" id="othertextbox" />  </div>
				<br>
				<label style="margin-right: 2px;">Major 1</label>
				<select class="dropdown2" id = "major1">
                    <?php for($i = 0; $i < count($majors); $i++) { ?>
                        <?php if($action === 'populate_edit') { ?>
                            <option <?php if($sp_college['type'] === $majors[$i] ) { ?> selected <?php } ?>><?php echo $majors[$i] ?></option>
                        <?php }else { ?> <option><?php echo $majors[$i] ?> <?php } ?></option>
                    <?php } ?>
                    <option value = "1" class = ".textexp"> Other </option>
                </select>
                <div id = "majordiv1">  <input type="text" id="majorothertextbox" />  </div>

				<label style="margin-left: 2px;">Major 2</label>
				<select class="dropdown2" id = "major2">
                    <?php for($i = 0; $i < count($majors); $i++) { ?>
                        <?php if($action === 'populate_edit') { ?>
                            <option <?php if($sp_experience['type'] === $majors[$i] ) { ?> selected <?php } ?>><?php echo $majors[$i] ?></option>
                        <?php }else { ?> <option><?php echo $majors[$i] ?> <?php } ?></option>
                    <?php } ?>
                    <option>none</option>
                    <option value = "1" class = ".textexp"> Other </option>
                </select>
                <div id = "majordiv2">  <input type="text" id="majorothertextbox2" />  </div>
				<br>

				<label style="margin-right: 1px;">Minor 1</label>
				<select class="dropdown2" id = "minor1">
                    <?php for($i = 0; $i < count($minors); $i++) { ?>
                        <?php if($action === 'populate_edit') { ?>
                            <option <?php if($sp_experience['type'] === $minors[$i] ) { ?> selected <?php } ?>><?php echo $minors[$i] ?></option>
                        <?php }else { ?> <option><?php echo $minors[$i] ?> <?php } ?></option>
                    <?php } ?>
                    <option value = "1" class = ".textexp"> Other </option>
                </select>

                <div id = "minordiv1">  <input type="text" id="minorothertextbox" />  </div>

                <label style="margin-left: 2px;">Minor 2</label>
				<select class="dropdown2" id = "minor2">
                    <?php for($i = 0; $i < count($minors); $i++) { ?>
                        <?php if($action === 'populate_edit') { ?>
                            <option <?php if($sp_experience['type'] === $minors[$i] ) { ?> selected <?php } ?>><?php echo $minors[$i] ?></option>
                        <?php }else { ?> <option><?php echo $minors[$i] ?> <?php } ?></option>
                    <?php } ?>
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
                <input type="hidden" name="page" value="college"/>
			</form>
		</div>
		</div>
		</div>
	</body>
</html>
