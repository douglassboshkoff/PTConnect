<?php

    function addUser($fname, $lname, $email, $gradYear) {
        global $db;
        $query = "INSERT INTO accounts( first_name, last_name, email, pt_grad_year) 
         VALUES ('$fname', '$lname', '$email', '$gradYear')";
         $db->exec($query);
         //this should work now assuming all of my syntax is correct. I cannot get it to work on phpstorm at this time
    }
    
    function get_user($email) {
        global $db;
        $query = "SELECT * FROM accounts WHERE email == '$email'";
        $user = $db->query($query);
        //this needs php code to return the acutal user, cannot write this at this time.
        //would give you cookie if you wrote this for me.
        //needs an object class
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
        return $result;
    }
    
   function getGradYears() {
        global $db;
        $query = "SELECT DISTINCT pt_grad_year
        FROM accounts
        ORDER BY pt_grad_year";
        $result = $db->query($query);
        $years = $result->fetch();
        return $years;

        //the sql command works, however the phpcode might not.
    }
?>
