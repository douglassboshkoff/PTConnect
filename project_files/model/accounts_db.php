<?php

    function add_user($fname, $lname, $email, $gradYear, $password) {
        global $db;
        $query = "INSERT INTO accounts( first_name, last_name, email, pt_grad_year, password)
         VALUES ('$fname', '$lname', '$email', '$gradYear', '$password')";
         $db->exec($query);
         //this should work now assuming all of my syntax is correct. I cannot get it to work on phpstorm at this time
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
        $query = "SELECT * FROM accounts WHERE email == '$email'";
        $user = $db->query($query);
        return $user;
    }
    
    function get_user_by_id($id) {
        global $db;
        $query = "SELECT * FROM accounts WHERE email == '$id'";
        $user = $db->query($query);
        return $user;
    }
    
    function validate_password($email, $password) {
        global $db;
        $query = "SELECT * FROM accounts WHERE email == '$email'";
        $result = $db->query($query);
        $user = $result->fetch();
        $upass = $user['password'];
        if($password == $upass) {
            return true;
        }
        else {
            return false;
        }
        //hope this workds
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
        $years = $result->fetch();
        return $years;

        //the sql command works, however the phpcode might not.
    }

    function get_name($id) {
        global $db;
        $query = "SELECT first_name
        FROM accounts
        WHERE id = '$id'";
        
    }
//    function get_users(){
//    global $db;
//    $query="SELECT * FROM accounts";
//    $result=$db->query($query);
//    return $result;
//    }


    function get_college_by_user($id) {
    global $db;
    $query = "SELECT name FROM universities
    INNER JOIN questions
    ON questions.university_id = universities.id
    WHERE questions.accounts_id = '$id'";
    $result = $db->query($query);
    return $result->fetch();
    }
    
    function get_names_by_filter($arryId) {
        global $db;
        $results = array();
        $i = 0;
        foreach($arryId as $id) {
            $query = 'SELECT CONCAT(first_name, " ", last_name) as Name FROM accounts WHERE id = "$id"';
            $name = $db->query($query);
            $results[$i] = $name;
            $i++;
        }
        return $results;
        //I cannot check this function at this time, my phpstorm still does not work, this functions takes in an array of
        // ids and returns and array of names. sorry if my syntax is wrong.
    }

?>
