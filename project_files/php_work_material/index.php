<?php
include_once "../model/database.php";
include_once "../model/accounts_db.php";
$error=false;

session_start();

if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'homepage';
}



if($action == 'login')
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    if(validate_password($email, $password) === true){

        $_SESSION['id'] = get_id_by_email($email);
        include('main.php');
        exit();
    }
    else {
        $error=true;
        include('homepage.php');
    }
}
else if($action == 'register')
{
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $verifypassword = $_POST['verifypassword'];
    $pt_grad_year = $_POST['pt_grad_year'];

    add_user($first_name, $last_name, $email, $pt_grad_year, $password);

    if($password == $verifypassword)
    {
        include('main.php');
    }
    else
    {
        echo "This should create error text in the registration box.";
    }
}
else if($action == 'continue_as_guest')
{
    include('main.php');
}
else if($action=='alumni_filter')
{
    include('../view/alumni_filter.php');
}else if($action === 'homepage')
{
    include('homepage.php');
}

?>