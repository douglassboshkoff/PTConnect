
<?php
require('../model/database.php');
require('../model/accounts_db.php');
require('../model/concentration_db.php');
require('../model/experiences_db.php');
require('../model/queries_db.php');
require('../model/questions_db.php');
require('../model/university_db.php');

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
else if($action == 'mycollege')
{
    /**
     * something like...
     * access the user that we're talking about...
     * access all of their colleges...
     * put those in an array?
     * loop through array
     * let those colleges populate the table...
     */
    $colleges = get_colleges();
    include('header.php');
    include('../view/mycollege.php');
}
else if($action == 'delete_college_from_user')
{
    /**
     * we have the user...
     * take the college name...
     * delete it from the user himself...
     */
}
else if($action == 'login')
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    if(validate_password($email, $password) == true){
        include('header.php');
        include('main.php');
    }
    else {
        include('homepage_header.php');
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
        include('header.php');
        include('main.php');
    }
    else
    {
        echo "This should create error text in the registration box.";
    }
}
else if($action == 'continue_as_guest')
{
    include('guest_header.php');
    include('main.php');
}
else if($action=='college_filter')
{
    include('../view/college_filter.php');
}
else if($action=='add_response')
{

}
else if($action=='edit_college')
{

}
else if($action=='delete_college')
{

}
else if($action=='alumni_filter')
{
    include('../view/alumni_filter.php');
}
else
{
    include('homepage_header.php');
    include('homepage.php');
}
?>
