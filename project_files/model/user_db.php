<?php


/**
 * MAKE A USER EDIT METHOD
 * MAKE A USER DELETE METHOD
 * REMEMBER THESE ARE TECHNICALLY CALLED 'ACCOUNT'!!!
 */


function get_users(){
    global $db;
    $query="SELECT * FROM accounts";
    $result=$db->query($query);
    return $result;
}

function add_user($first_name, $last_name, $email, $pt_grad_year, $password)
{
    global $db;
    $query = "INSERT INTO accounts(first_name, last_name, email, pt_grad_year, password)
              VALUES ('$first_name','$last_name', '$email', '$pt_grad_year', '$password')";
    $db->exec($query);
}

function get_user($email)
{
    global $db;
    $query ="SELECT * FROM accounts
             WHERE email = '$email'";
    $result=$db->query($query);
    return $result->fetch();
}

function get_college_by_user($id) {
    global $db;
    $query = "SELECT name FROM universities
    INNER JOIN questions
    ON questions.university_id = universities.id
    WHERE questions.accounts_id = '$id'";
    $result = $db->query($query);
    return $result->fetch();
}
