<?php
require('../model/database.php');
require_once('../model/accounts_db.php');
require_once('../model/concentration_db.php');
require_once('../model/experiences_db.php');
require_once('../model/queries_db.php');
require_once('../model/questions_db.php');
require_once('../model/university_db.php');

if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'under_construction';
}

if ($action == 'under_construction')
{
    include('index.php');
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
        include('index.php');
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
    include('index.php');
}
?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="stylesheet.css" />
</head>
<body>
<div id="wrapper1">
    <div id='wrapper2'>
    <div id='top'>
        <ul>
            <li><span id="white">PT</span><span id="red">Connect</span></li>
            <form id="login">
                <input type="text" placeholder="Email"/>
                <input type="password" placeholder="Password"/>
                <input id="loginButton" type="submit" value="Login"/>
            </form>
        </ul>
    </div>
    <div id="guestSide">
        <h1>Just Visiting?</h1>
    </div>
    <div id="ptcsSide">
        <h1>Past or Current PTCS Student?</h1>
    </div>
    <div id="guestLogin">
        <p>Learn more about PTCS alumni, the colleges they have attended, and their current and past employers.  </p>
        <form>
            <input class="button" type="submit" value="Continue as Guest" />
        </form>
    </div>
    <div id="ptcsCreate">
        <form>
            <input id="fname" type="text" placeholder="First Name"/>
            <input id="lname" type="text" placeholder="Last Name"/>
            <input id="email" type="text" placeholder="Email"/>
            <input id="password" type="password" placeholder="Password"/>
            <input id="password" type="password" placeholder="Verify Password"/>
            <select id="gradyear">
                <option>PT Grad Year</option>
                <option>2017</option>
                <option>2016</option>
                <option>2015</option>
                <option>2014</option>
                <option>2013</option>
                <option>2012</option>
                <option>2011</option>
                <option>2010</option>
                <option>2010</option>
                <option>2010</option>
                <option>2009</option>
                <option>2008</option>
                <option>2007</option>
                <option>2006</option>
                <option>2005</option>
                <option>2004</option>
            </select>
            <input class="button" id="create" type="submit" value="Create" />
            <form>
    </div>
</div>
</div>
</body>
</html>
