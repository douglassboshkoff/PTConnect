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
    $id = $_POST['id'];
    $sp_college = get_specific_college($id)->fetch();
    $sp_major =  get_sp;
    $sp_minor;
    $colleges = get_colleges();
}
else if($action === 'add')
{
    $id = $_POST['id'];

}
else if($action === 'delete')
{
    $id = $_POST['id'];
    remove_college($id);
    $colleges = get_colleges();
    $action = 'display';
}
include "header.php";
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
            #majordiv1, #majordiv2, #minordiv1, #minordiv2 {
                display:inline-block;
                margin-left: 77px;

            }
            #majordiv1 input, #majordiv2 input, #minordiv1 input, #minordiv2 input {
                width: 240px;
                font-family: "HelveticaNeue-Thin", "Helvetica Neue Thin", "Helvetica Neue", Helvetica, sans-serif;
                font-size: 16px;
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
                            <form action="myCollege.php" method="post">
                                <input type="hidden" value="populate_edit" name="action"/>
                                <input type="hidden" value="<?php echo $college['id'] ?>" name="id"/>
                                <input id="submitLink" type="submit" value="edit" name="submit"/>
                                <input type="hidden" value="college" name="page"/>
                            </form>
                        </td>
                        <td>
                            <form action="myCollege.php" method="post">
                                <input id="submitLink" type="submit" value="delete" name="submit"/>
                                <input type="hidden" value="<?php echo $college['id'] ?>" name="id"/>
                                <input type="hidden" value="delete" name="action"/>
                                <input type="hidden" value="college" name="page"/>
                            </form>
                            
                    </tr>
                <?php  } unset($college) ?>
			</table>
		</div>
		<div id="add">
			<h1><?php if($action==='display') { echo "Add College";} else { echo "Edit College";} ?></h1>
			<form method="post" action="myCollege.php">
				<label>School</label>
				<select class="dropdown2" id="college2">
                    <?php $colleges = get_colleges(); ?>
                        <?php  foreach($colleges as $college1) { ?>

                        <?php if($action==='populate_edit') { ?>

                                <option <?php if($sp_college['name'] === $college1['name'] ) { ?> selected <?php } ?>> <?php echo $college1['name']; ?></option>

                            <?php }else { ?>

                            <option><?php echo $college1['name'] ?></option>
                        <?php } ?>
                    <?php } ?>

                    <option value = "1" class = ".textexp"> Other </option>

                </select>
                <div id = "hiddendiv">  <input type="text" id="othertextbox" />  </div>
				<br>
				<label style="margin-right: 2px;">Major 1</label>
				<select class="dropdown2" id = "major1" style= "width:242px">
                    <?php for($i = 0; $i < count($majors); $i++) { ?>
                        <?php if($action === 'populate_edit') { ?>
                            <option <?php if($sp_college['major'] === $majors[$i] ) { ?> selected <?php } ?>><?php echo $majors[$i] ?></option>
                        <?php }else { ?> <option><?php echo $majors[$i] ?> <?php } ?></option>
                    <?php } ?>
                    <option value = "1" class = ".textexp"> Other </option>
                </select>

				<label style="margin-left: 2px;">Major 2</label>
				<select class="dropdown2" id = "major2" style= "width:242px">
                    <?php for($i = 0; $i < count($majors); $i++) { ?>
                        <?php if($action === 'populate_edit') { ?>
                            <option <?php if($sp_college['type'] === $majors[$i] ) { ?> selected <?php } ?>><?php echo $majors[$i] ?></option>
                        <?php }else { ?> <option><?php echo $majors[$i] ?> <?php } ?></option>
                    <?php } ?>
                    <option>none</option>
                    <option value = "1" class = ".textexp" style= "width:242px"> Other </option>
                </select>
                <div id = "majordiv1" >  <input type="text" id="majorothertextbox" />  </div>
                <div id = "majordiv2">  <input type="text" id="majorothertextbox2" />  </div>
				<br>

				<label style="margin-right: 1px;">Minor 1</label>
				<select class="dropdown2" id = "minor1" style= "width:242px">
                    <?php for($i = 0; $i < count($minors); $i++) { ?>
                        <?php if($action === 'populate_edit') { ?>
                            <option <?php if($sp_college['type'] === $minors[$i] ) { ?> selected <?php } ?>><?php echo $minors[$i] ?></option>
                        <?php }else { ?> <option><?php echo $minors[$i] ?> <?php } ?></option>
                    <?php } ?>
                    <option value = "1" class = ".textexp"> Other </option>
                </select>


                <label style="margin-left: 2px;">Minor 2</label>
				<select class="dropdown2" id = "minor2" style= "width:242px">
                    <?php for($i = 0; $i < count($minors); $i++) { ?>
                        <?php if($action === 'populate_edit') { ?>
                            <option <?php if($sp_college['type'] === $minors[$i] ) { ?> selected <?php } ?>><?php echo $minors[$i] ?></option>
                        <?php }else { ?> <option><?php echo $minors[$i] ?> <?php } ?></option>
                    <?php } ?>
                    <option value = "1" class = ".textexp"> Other </option>
                </select>
                <div id = "minordiv2">  <input type="text" id="minorothertextbox2" />  </div>
                <div id = "minordiv1">  <input type="text" id="minorothertextbox" />  </div>


                <h2>Question 1 Text</h2>
				<textarea class="questions" rows="4"></textarea>
				<h2>Question 2 Text</h2>
				<textarea class="questions" rows="4"></textarea>
				<h2>Question 3 Text</h2>
				<textarea class="questions" rows="4"></textarea>
				<input type="submit" id="addButton" value="submit">
                <input type="hidden" name="page" value="college"/>
			</form>
		</div>
		</div>
		</div>

	</body>
    <?php  include "footer.php" ?>
</html>

