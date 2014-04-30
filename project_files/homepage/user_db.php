<?php

/*
 * I could temporarily connect this database to the customer table in
 * tech_support. Connect email and password since username does not exist
 * in the table. But gradyear is not accounted for in the table...
 */

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

function get_user($email)
{
    global $db;
    $query ="SELECT * FROM users
             WHERE email = '$email'";
    $result=$db->query($query);
    return $result;
}

function get_college_by_user($id) {
    global $db;
    $query = "SELECT name FROM universities
    INNER JOIN questions
    ON questions.university_id = universities.id
    WHERE questions.accounts_id = '$id'";
    $result = $db->query($query);
    return $result;
}
