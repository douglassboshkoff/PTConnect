<?php

    function addUser($fname, $lname, $email, $gradYear) {
        global $db;
        $query = 'INSERT INTO accounts( first_name, last_name, email, pt_grad_year) 
         VALUES ('$fname', '$lname', '$email', '$gradYear')';
         $db->exec($query);
         //this should work now assuming all of my syntax is correct. I cannot get it to work on phpstorm at this time
    }
    
    function getUser($email) {
        global $db;
        $query = "SELECT * FROM accounts WHERE email == '$email'"
        $user = $db->query($query);
        //this needs php code to return the acutal user, cannot write this at this time.
        //would give you cookie if you wrote this for me.
    }

?>
