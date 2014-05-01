<?php

function get_experiences($id) {
    global $db;
    $query = "SELECT * FROM experiences WHERE accounts_id_ac = '$id'";
    $result = $db->query($query);
    return $result->fetch();
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