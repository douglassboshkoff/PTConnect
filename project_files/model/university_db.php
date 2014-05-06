<?php
/**
 * Created by PhpStorm.
 * User: rubenschuckit
 * Date: 4/24/14
 * Time: 1:44 PM
 */


function get_college($userID) {
    $query = "SELECT university_id FROM questions WHERE account_id == '$userID'";
}

function get_colleges() {
        global $db;
        $query = "SELECT DISTINCT name
        FROM universities
        ORDER BY name";
        $request = $db->query($query);

    /*foreach($request as $in){
            $colleges[] = $in;
        }

        return $colleges;*/
    return $request;
        //SQL works, phpcode might not}
}
?>
