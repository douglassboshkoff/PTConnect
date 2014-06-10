<?php

function add_user($fname, $lname, $email, $gradYear, $password) {
    global $db;
    $query = "INSERT INTO accounts( first_name, last_name, email, pt_grad_year, password)
         VALUES ('$fname', '$lname', '$email', '$gradYear', '$password')";
    $db->exec($query);
}

function remove_user($id) {
    global $db;
    $query = "DELETE FROM accounts WHERE id = '$id'";
    $db->exec($query);
}

function get_users() {
    global $db;
    $query = "SELECT * FROM accounts ORDER BY id";
    $users = $db->query($query);
    return $users;
}

function get_user($email) {
    global $db;
    $query = "SELECT * FROM accounts WHERE email = '$email'";
    $user = $db->query($query);
    return $user;
}

function get_user_by_id($id) {
    global $db;
    $query = "SELECT * FROM accounts WHERE id = '$id'";
    $user = $db->query($query);
    return $user;
}

function get_image($id){
    global $db;
    $query = "SELECT image_link FROM accounts WHERE id = '$id'";
    $res = $db->query($query);
    return $res->fetch();
}
function validate_password($email, $password) {
    global $db;
    $query = "SELECT * FROM accounts WHERE email = '$email'";
    $result = $db->query($query);
    $user = $result->fetch();

    $pass = $user['password'];
    if($password == $pass) {
        return true;
    }
    else {
        return false;
    }
}

function get_bio($id) {
    global $db;
    $query = "SELECT bio FROM accounts WHERE id = '$id'";
    $result = $db->query($query);
    return $result->fetch();
}

function get_grad_years() {
    global $db;
    $query = "SELECT DISTINCT pt_grad_year
        FROM accounts
        ORDER BY pt_grad_year";
    $result = $db->query($query);
    return $result;

    //the sql command works, however the phpcode might not.
}

function get_grad_years_by_college($collegeID) {
    global $db;
    $query = "SELECT DISTINCT pt_grad_year
        FROM accounts where university_id = '$collegeID'
        ORDER BY pt_grad_year";
    $result = $db->query($query);
    return $result;

    //the sql command works, however the phpcode might not.
}

function get_name($id) {
    global $db;
    $query = "SELECT *
        FROM accounts
        WHERE id = '$id'";
    $result = $db->query($query);
    return $result->fetch();
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

function accounts_filter($university, $year, $major, $type, $title) {
    //Initial Database Fetch
    global $db;
    $query = "SELECT distinct first_name, last_name, pt_grad_year, email, type, title FROM accounts
    LEFT JOIN questions ON accounts.id = questions.accounts_id
    LEFT JOIN concentration ON accounts.id = concentration.accounts_id
    LEFT JOIN experiences on accounts.id = experiences.accounts_id";

    //Refined Filtration
    $paramBuilder = "";
    $got = false;
    if($university != "") {
        $query = "SELECT distinct name, first_name, last_name, pt_grad_year, university_id, email, type, title FROM accounts
    LEFT JOIN questions ON accounts.id = questions.accounts_id
    LEFT JOIN concentration ON accounts.id = concentration.accounts_id
    LEFT JOIN experiences on accounts.id = experiences.accounts_id";
        $got = true;
        $query2 = "SELECT id FROM universities WHERE name='$university'"; //UNIVERSITY NAME IN PARAM; NOT ID!
        $university_id = $db->query($query2);
        $university_id = $university_id->fetch();
        $university_id = $university_id['id'];
        $paramBuilder .= " WHERE university_id = '$university_id' ";
    }

    if($year != "") {
        if($paramBuilder == ""){
            $paramBuilder .= " WHERE pt_grad_year = '$year'";
        }
        else{
            $paramBuilder .= " AND pt_grad_year = '$year'";
        }
    }

    if($major != "") {
        if($got == true){
            $query = "SELECT distinct name, first_name, last_name, pt_grad_year, university_id, email, type, title FROM accounts
    LEFT JOIN questions ON accounts.id = questions.accounts_id
    LEFT JOIN concentration ON accounts.id = concentration.accounts_id
    LEFT JOIN experiences on accounts.id = experiences.accounts_id";
        }
        else{
            $query = "SELECT distinct name, first_name, last_name, pt_grad_year, email, type, title FROM accounts
    LEFT JOIN questions ON accounts.id = questions.accounts_id
    LEFT JOIN concentration ON accounts.id = concentration.accounts_id
    LEFT JOIN experiences on accounts.id = experiences.accounts_id";
        }
        if($paramBuilder == ""){
            $paramBuilder .= " WHERE name = '$major'";
        }
        else{
            $paramBuilder .= " AND name = '$major'";
        }
    }

    if($type != ""){

        if($paramBuilder == ""){
            $paramBuilder .= " WHERE type = '$type'";
        }else{
            $paramBuilder .= " AND type = '$type'";
        }
    }

    if($title != ""){
        
        if($paramBuilder == ""){
            $paramBuilder .= " WHERE title = '$title'";
        }else{
            $paramBuilder .= " AND title = '$title'";
        }
    }
    //echo $query.$paramBuilder;
    $result = $db->query($query.$paramBuilder);
    //$result = $result->fetchAll();
    return $result;
}


//will not work until the column is added to the database by Ruben
function  add_image($image_link, $id) {
    global $db;
    $query = "UPDATE accounts SET image_link = '$image_link' WHERE id = '$id'";
    $db->exec($query);
}
function get_id_by_email($email)
{
    global $db;
    $query = "SELECT id FROM accounts WHERE email = '$email'";
    $result = $db->query($query);
    return $result->fetch();
}

function get_email_by_id($id)
{
    global $db;
    $query = "SELECT email FROM accounts WHERE id = '$id'";
    $result = $db->query($query)->fetch()[0];
    return $result;
}

function update_user($id, $fname, $lname, $email, $password, $gradyear, $bio){
    global $db;
    $query = "UPDATE accounts
    SET id = '$id', first_name = '$fname',
    last_name = '$lname', email = '$email',
    pt_grad_year = '$gradyear', bio = '$bio',
    password = '$password'
    WHERE id = '$id'";
    $db->exec($query);
}