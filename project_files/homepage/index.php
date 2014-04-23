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
    $username = $_POST['username'];
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
        include('next_page.php');
    }
}
else
{
    include('homepage_header.php');
    include('homepage.php');
}
?>