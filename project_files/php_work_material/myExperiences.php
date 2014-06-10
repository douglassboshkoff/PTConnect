<!DOCTYPE html>
<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
/**
 * Created by PhpStorm.
 * User: Douglass
 * Date: 5/29/14
 * Time: 10:11 AM
 */
//include('../validate/fields.php');
//include('../validate/validate.php');
include('../model/questions_db.php');
include('../model/experiences_db.php');
include('../model/database.php');
include('../model/university_db.php');
include('../model/concentration_db.php');
//$fields = new Register\fields();


/**$fields->addField('type','You must choose your type of experience.');
$fields->addField('title','You must choose the title of your experience.');
$fields->addField('other','Must choose a type.');

//$type = new Register\field('type','Must choose a type.');
$title = new Register\field('title','You must choose a title for your experience.');
$other = new Register\field('other');
$validate = new Register\validate(); **/

$id = $_SESSION['id'];
if(isset($_POST['action']))
{
    $action = $_POST['action'];
}
else
{
    $action='display';
}
    $type= get_types();
    $titles = get_all_titles();

if($action==='display')
{
    $experiences = get_experiences($_SESSION['id']);
}
else if($action === 'edit')
{
    $id = $_POST['id'];
    $content = $_POST['content'];
    $type = $_POST['type'];
    if($_POST['title'] === '1')
    {
        $title = $_POST['titletextbox'];
    }else{
    $title = $_POST['title'];
    }
    update_experience($id, $type, $title, $content, $id);
    $experiences = get_experiences($id);
    $type = get_types();
    $titles = get_all_titles();
    $action = 'display';
}
else if($action === 'populate_edit')
{
    $id = $_POST['id'];
    $sp_experience = get_specific_experience($id)->fetch();
    $experiences = get_experiences(1);
}
else if($action === 'add')
{
    $content = $_POST['content'];
    $type = $_POST['type'];
    if($_POST['title'] === '1')
    {
        $title = $_POST['titletextbox'];
    }else{
        $title = $_POST['title'];
    }
    add_experience($type, $title, $content, $id);
    $experiences = get_experiences($id);
    $type = get_types();
    $titles = get_all_titles();
    $action = 'display';
}
else if($action === 'delete')
{
    $id = $_POST['id'];
    delete_experience($id);
    $experiences = get_experiences(1);
    $action = 'display';
}
include("header.php");
?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="stylesheet.css" />
        <script type="text/javascript" src="../js/jQuery.js"></script>
        <script type="text/javascript" src="../js/dropdown_text_exp.js"></script>
        <style>
            form input[type="submit"]{

                background: none;
                border: none;
                color: black;
                text-decoration: underline;
                cursor: pointer;
                font-size: 16px;
            }
            .dropdown2{
                width: 200px;
                margin-right:4px;
            }
            #titlediv input {
	            margin-left: 58px;
	            width: 316px;
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
                <?php  foreach($experiences as $experience) { ?>
                    <tr>
                        <td><h1><?php echo $experience['title']; ?></h1></td>

                        <td>
                            <form action="myExperiences.php" method="post">
                                <input type="hidden" value="populate_edit" name="action" />
                                <input type="hidden" value="<?php echo $experience['id'] ?>" name="id"/>
                                <input type="submit" value="edit" name="submit"/>
                                <input type="hidden" value="experience" name="page"/>
                            </form>
                        </td>
                        <td>
                            <form action="myExperiences.php" method="post">
                                <input type="submit" value="delete" name="submit" />
                                <input type="hidden" value="<?php echo $experience['id'] ?>" name="id"/>
                                <input type="hidden" value="delete" name="action"/>
                                <input type="hidden" value="experience" name="page"/>
                            </form>

                    </tr>
                <?php  } ?>
			</table>
		</div>
		<div id="add">
            <h1><?php if($action==='display') { echo "Add Experience";} else { echo "Edit Experience";} ?></h1>

            <form method="post" action="myExperiences.php">

                <label>Type</label>

                <select class="dropdown2" id = "typeselect" name="type" style="width:320px">
                    <?php for($i = 0; $i < count($type); $i++) { ?>
                        <?php if($action === 'populate_edit') { ?>

                            <option <?php if($sp_experience['type'] === $type[$i] ) { ?> selected <?php } ?>><?php echo $type[$i] ?></option>

                        <?php }else { ?> <option><?php echo $type[$i] ?> <?php } ?></option>
                    <?php } ?>
                    <option>Other</option>
                </select>

                <br/>
                <label style="margin-right: 5px;">Title</label>

                <select class="dropdown2" id = "titleselect" name="title" style="width:320px">
                    <?php for($i = 0; $i < count($titles); $i++) { ?>
                        <?php if($action === 'populate_edit') { ?>

                            <option <?php if($sp_experience['title'] === $titles[$i] ) { ?> selected <?php } ?>><?php echo $titles[$i] ?></option>

                        <?php }else { ?> <option><?php echo $titles[$i] ?> <?php } ?></option>
                    <?php } ?>
                    <option value="1" >Other</option>
                </select>


                <div id = "titlediv">  <input type="text" id="titletextbox" name="titletextbox" />  </div>

                <br/>

                <h2>Describe Your Experience</h2>
                <textarea class="questions" rows="4" name="content" ><?php if($action==='populate_edit') { echo $sp_experience['content']; } ?></textarea>
                <input type="hidden" name="action" value="<?php
                if($action === 'display')
                {
                    echo 'add';
                }
                else{
                    echo 'edit';
                }
                ?>">
                <input type="submit" id="addButton" value="submit" style="text-decoration: none"/>
                <?php if($action==='populate_edit') { ?>
                    <input type="hidden" name="id" value="<?php echo $sp_experience['id'] ?>"/>
                <?php } ?>
            </form>
        </div>
		</div>
		</div>
		</body>
<?php include('footer.php') ?>
</html>
