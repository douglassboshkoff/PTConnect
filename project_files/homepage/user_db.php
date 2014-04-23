<?php

function get_users(){
    global $db;
    $query="SELECT * FROM users";
    $result=$db->query($query);
    return $result;
}

function add_user($fname, $lname, $email, $password, $gradyear)
{
    global $db;
    $query = "INSERT INTO users(fname, lname, email, password, gradyear)
              VALUES ('$fname','$lname', '$email', '$password', '$gradyear')";
    $db->exec($query);
}

function get_customer($username)
{
    global $db;
    $query ="SELECT * FROM users
             WHERE username = '$username'";
    $result=$db->query($query);
    return $result;
}
