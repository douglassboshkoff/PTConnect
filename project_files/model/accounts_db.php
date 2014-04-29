<?php

//note, this does not work atm
//test 2

    function addUser($fname, $lname, $email, $gradYear) {
        $query = 'INSERT INTO accounts( first_name, last_name, email, pt_grad_year) 
         VALUES ('$fname', '$lname', '$email', '$gradYear')';
    }

?>
