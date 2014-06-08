<?php
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

if(isset($_POST['action']))
{
    $action = $_POST['action'];
}
else
{
    $action='display';
}

$page = 'experience';

if($page === 'college')
{
    $majors = get_majors();
    $minors = get_minors();
}else if($page === 'experience')
{
    $type= get_types();
    $titles = get_all_titles();
}



if($action==='display')
{
    if($page === 'experience')
    {
    $experiences = get_experiences(1);
    include('myexperiences.php');
    }
    else if($page === 'college')
    {
        $colleges = get_colleges();
        include('mycollege.php');
    }
}
else if($action === 'edit')
{
    $id = $_POST['id'];
    $content = $_POST['content'];
    $type = $_POST['type'];
    $title = $_POST['title'];
    update_experience($id, $type, $title, $content, 1);
    $experiences = get_experiences(1);
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
    $title = $_POST['title'];
    add_experience($type, $title, $content, 1);
    $experiences = get_experiences(1);
    $action = 'display';
}
else if($action === 'delete')
{
    $id = $_POST['id'];
    delete_experience($id);
    $experiences = get_experiences(1);
    $action = 'display';
}
?>