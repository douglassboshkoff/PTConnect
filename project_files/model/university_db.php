<?php
/**
 * Created by PhpStorm.
 * User: rubenschuckit
 * Date: 4/24/14
 * Time: 1:44 PM
 */

function add_college($name, $location, $image_link) {
    global $db;
    $query = "INSERT INTO universities (name, location, image_link) VALUES ('$name','$location', '$image_link')";
    $db->exec($query);
}

function remove_college($id) {
    global $db;
    $query = "DELETE FROM universities WHERE id = '$id'";
    $db->exec($query);
}

function get_college($userID) {
    global $db;
    $query = "SELECT university_id FROM questions WHERE account_id = '$userID'";
    $college = $db->query($query);
    return $college;
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
        //SQL works, phpcode might not}
}
?>
