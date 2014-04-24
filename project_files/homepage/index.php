<?php
require('database.php');
require('user_db.php');

if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'under_construction';
}

if ($action == 'under_construction')
{
    include('homepage_header.php');
    include('homepage.php');
}

else if($action == 'login')
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    include('next_page.php');
}
else if($action == 'register')
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $verifypassword = $_POST['verifypassword'];
    $gradyear = $_POST['gradyear'];

    if($password == $verifypassword)
    {
        include('header.php');
        include('main.php');
    }
}
else if($action == 'continue_as_guest')
{
    include('guest_header.php');
    include('main.php');
}
else
{
    include('homepage_header.php');
    include('homepage.php');
}
?>