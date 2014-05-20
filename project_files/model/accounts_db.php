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

function get_name($id) {
    global $db;
    $query = "SELECT first_name
        FROM accounts
        WHERE id = '$id'";

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

function filter($university, $location, $major) {
    //Initial Database Fetch
    global $db;
    $query = "SELECT * FROM accounts LEFT JOIN questions ON accounts.id = questions.accounts_id LEFT JOIN concentration ON accounts.id = concentration.accounts_id";

    //Refined Filtration
    $paramBuilder = "";
    if($university != null) {
        $query = "SELECT id FROM universities WHERE name='$university'"; //UNIVERSITY NAME IN PARAM; NOT ID!
        $university_id = $db->query($query);
        $university_id = $university_id->fetch();
        $paramBuilder .= "WHERE university_id = '$university_id' ";
    }

    if($location != null) {
       $paramBuilder .= "AND WHERE location = '$location' ";
    }

    if($major != null) {
        $paramBuilder .= "AND WHERE name = '$major'' ";
    }

    $result = $db->query($query + $paramBuilder);
    $result = $result->fetch();

    return $result;
}