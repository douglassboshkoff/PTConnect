<?php
//<<<<<<< HEAD

function get_experiences($id) {
    global $db;
    $query = "SELECT * FROM experiences WHERE accounts_id_ac = '$id'";
    $result = $db->query($query);
    return $result;
}

function get_content($id) {
    global $db;
    $query = "SELECT content FROM experiences WHERE accounts_id_ac = '$id'";
    $result = $db->query($query);
    return $result->fetch();
}

function get_all_titles() {
    global $db;
    $query = "SELECT title FROM experiences";
    $result = $db->query($query);
    $result = $result->fetch();
    $toReturn = array();

    foreach($result as $r) {
        $toReturn[] = $r;
    }

    return $toReturn;

    //returns an array
}
//=======
/**
 * Created by JetBrains PhpStorm.
 * User: Danny
 * Date: 4/28/14
 * Time: 1:32 PM
 * To change this template use File | Settings | File Templates.
 */
 
  function get_types() {
    global $db;
    $query = 'SELECT DISTINCT type
    FROM experiences
    ORDER BY type';
    $result = $db->query($query);
    $types = $result->fetch();
    return $types;
  }
?>
