<?php

function get_experiences($id) {
    global $db;
    $query = "SELECT * FROM experiences WHERE accounts_id = '$id'";
    $result = $db->query($query);
    return $result;
}
//Made by Douglass
function get_specific_experience($id) {
global $db;
$query = "SELECT * FROM experiences WHERE id = '$id'";
$result = $db->query($query);
    return $result;
}

function get_content($id) {
    global $db;
    $query = "SELECT content FROM experiences WHERE accounts_id = '$id'";
    $result = $db->query($query);
    return $result->fetch();
}

function get_all_titles() {
    global $db;
    $query = "SELECT title FROM experiences";
    $result = $db->query($query);
    return $result;

}
 
  function get_types() {
    global $db;
    $query = 'SELECT DISTINCT type
    FROM experiences
    ORDER BY type';
    $result = $db->query($query);
    return $result->fetchAll(PDO::FETCH_COLUMN,0);
  }
?>

