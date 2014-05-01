<?php
/**
 * Created by PhpStorm.
 * User: rubenschuckit
 * Date: 4/24/14
 * Time: 1:44 PM
 */

function getCollege($userID) {
    $query = "SELECT university_id FROM questions WHERE account_id == '$userID'";

}

function getColleges() {
        global $db;
        $query = "SELECT DISTINCT name
        FROM universities
        ORDER BY name";
        $request = $db->query($query);
        $universities = $request->fetch();
        return $universities;
        //SQL works, phpcode might not}
}

?>
